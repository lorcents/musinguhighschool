<style>
  h1,h2,h3{
    color :blue;
  }
  iframe{
    
  }
  </style>
# MUSINGU HIGH WEBSITE
<P>This is a website for my former highschool.</p>
<p>
This project is a web app for managing school activities. Built with PHP, MySQL, HTML, JS and CSS  .
<p>

## Get this site live on 
*  [https://musinguhigh.orgfree.com](https://musinguhigh.orgfree.com) 

## HOW TO RUN IT
<ul>
<li>Run Apache web server(XAMPP).</li>
<li>create a database called musingu
<li>Import 'musingu.sql' in PHPMyAdmin</li>
<li>Run in your browser using a local host e.g. 'localhost/path/index.php'
</ul>


### sql code for alumini table
><code>CREATE TABLE `alumini` (
  `tbl_image_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `year` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
</code>
'
### sql code for contacts table

><code>REATE TABLE `contact` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` text COLLATE utf8_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `copy` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `human` char(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
</code>

## connect with me Ian Njoroge
*  [Git](https://github/lorcents) 
*  [twitter](https://twitter/iannjoroge120) 
*  [linkdein](https://linkdein/lorcents) 
*  [Email](mailto:iannjoroge120@gmail.com)