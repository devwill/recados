CREATE TABLE `recados` (
  `id` int(20) NOT NULL auto_increment,
  `de` text NOT NULL,
  `arquivo` text NOT NULL,
  `para` text NOT NULL,
  `cidade` text NOT NULL,
  `email` text NOT NULL,
  `recado` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

