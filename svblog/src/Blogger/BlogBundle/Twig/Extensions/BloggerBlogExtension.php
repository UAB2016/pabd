<?php
// src/Blogger/BlogBundle/Twig/Extensions/BloggerBlogExtension.php

namespace Blogger\BlogBundle\Twig\Extensions;

class BloggerBlogExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'created_ago' => new \Twig_Filter_Method($this, 'createdAgo'),
        );
    }

    public function createdAgo(\DateTime $dateTime)
    {
        $delta = time() - $dateTime->getTimestamp();
        if ($delta < 0)
            throw new \InvalidArgumentException("nu sunt capabil sa lucrez cu date viitoare");

        $duration = "";
        if ($delta < 60)
        {
            // Seconds
            $time = $delta;
            $duration = $time . " secunde" . (($time > 1) ? "" : "") . " in urma";
        }
        else if ($delta <= 3600)
        {
            // Mins
            $time = floor($delta / 60);
            $duration = $time . " minut" . (($time > 1) ? "e" : "") . " in urma";
        }
        else if ($delta <= 86400)
        {
            // Hours
            $time = floor($delta / 3600);
            $duration = $time . " ore" . (($time > 1) ? "" : "") . " in urma";
        }
        else
        {
            // Days
            $time = floor($delta / 86400);
            $duration = $time . " zi" . (($time > 1) ? "le" : "") . " in urma";
        }

        return $duration;
    }

    public function getName()
    {
        return 'blogger_blog_extension';
    }
}
