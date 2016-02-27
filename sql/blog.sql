-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 26 Février 2016 à 16:36
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` datetime NOT NULL,
  `auteur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `date_publication`, `auteur`) VALUES
(1, 'Bienvenue sur ce premier blog en php !', 'Premier blog, premier article, pour ce début, on fera simple avec juste du texte.', '2016-02-18 09:23:06', 'Guillaume'),
(2, 'Les commentaires arrivent !', 'Maintenant que le blog fonctionne, il faut penser à ce que les visiteurs pourront faire une fois sur le site, prochaine étape : l''ajout des commentaires !', '2016-02-18 11:50:37', 'Guillaume'),
(3, 'Un lorem ipsum ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt porttitor finibus. Donec mollis id eros non egestas. Curabitur commodo massa vitae risus ornare venenatis. Aenean ullamcorper mi sit amet massa varius, vel elementum enim bibendum. Duis sagittis a lacus vel efficitur. In eu egestas dolor. Vivamus at commodo magna. Nunc feugiat massa nec augue blandit molestie. Quisque eros dui, imperdiet eget tortor at, rutrum tempus sem. Aenean maximus leo nec tellus faucibus tristique. Integer venenatis egestas laoreet. \r\n\r\nFusce fringilla, turpis eu gravida tempus, nunc massa feugiat nibh, ut convallis nulla tellus id lacus. Vestibulum hendrerit vulputate libero eu euismod. Morbi magna lacus, eleifend in nibh placerat, hendrerit interdum eros. In ipsum mauris, iaculis nec augue vel, rutrum porttitor erat. Aliquam eu porta nulla, eu dignissim est. Morbi aliquet nunc sit amet justo porta pharetra. Vestibulum consectetur pellentesque orci vel aliquam. Mauris consequat, ligula quis egestas venenatis, leo libero efficitur dolor, in tempus erat enim ac tortor. Maecenas hendrerit ligula sit amet massa rutrum pellentesque. Quisque et diam mi. Ut nulla mauris, tincidunt in convallis non, dignissim et augue. Nullam vel mi et diam congue ultricies. Pellentesque interdum vehicula nulla. Maecenas aliquam tincidunt tempus. Aliquam rhoncus est lectus, nec efficitur augue ultrices id. \r\n\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur posuere ac orci vel hendrerit. Aliquam tincidunt commodo tortor, luctus pulvinar eros auctor accumsan. Praesent vehicula accumsan nisl, posuere pharetra lorem molestie vestibulum. Praesent quis turpis tristique, volutpat ex sed, dapibus nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac ligula eget diam fermentum aliquam sed vehicula lorem. Aliquam erat volutpat. Aliquam elementum a dolor ac efficitur. Sed euismod rhoncus lobortis. \r\n\r\nPhasellus lobortis dolor quis libero aliquam vehicula. Sed tristique tellus augue, vitae aliquet ante tristique quis. Ut sed euismod felis. Nunc hendrerit viverra ipsum, ut sollicitudin lectus maximus sed. In ac ipsum nec ex sollicitudin iaculis. Suspendisse ac neque augue. Aenean egestas quam sem, et dapibus nulla congue in. Nam rhoncus, odio nec fringilla iaculis, dui libero varius orci, in efficitur quam sem non velit. Nunc vitae ipsum sagittis, pulvinar ipsum sit amet, eleifend nisl. Mauris finibus lacus non felis ullamcorper ultrices. Duis commodo eros sed urna mollis cursus. Sed sollicitudin quis sapien et tincidunt. Vestibulum non enim consectetur lacus finibus congue eget eu mauris. Curabitur eu nisl nulla. Nunc urna quam, fringilla ut bibendum sit amet, facilisis in enim. \r\n\r\nDuis non turpis sagittis, porta massa vel, commodo eros. Suspendisse velit magna, scelerisque ut nibh in, placerat ultrices tortor. Sed id augue vel est aliquam tristique. Aenean viverra porttitor metus. Integer tincidunt nec massa eget imperdiet. Duis tempus, risus ut elementum tempus, urna dui rhoncus diam, vel accumsan felis massa non lectus. In eu tellus a nisi molestie fermentum. \r\n', '2016-02-18 11:51:57', 'Guillaume'),
(4, 'Encore du lorem ipsum', 'Phasellus lobortis dolor quis libero aliquam vehicula. Sed tristique tellus augue, vitae aliquet ante tristique quis. Ut sed euismod felis. Nunc hendrerit viverra ipsum, ut sollicitudin lectus maximus sed. In ac ipsum nec ex sollicitudin iaculis. Suspendisse ac neque augue. Aenean egestas quam sem, et dapibus nulla congue in. Nam rhoncus, odio nec fringilla iaculis, dui libero varius orci, in efficitur quam sem non velit. Nunc vitae ipsum sagittis, pulvinar ipsum sit amet, eleifend nisl. Mauris finibus lacus non felis ullamcorper ultrices. Duis commodo eros sed urna mollis cursus. Sed sollicitudin quis sapien et tincidunt. Vestibulum non enim consectetur lacus finibus congue eget eu mauris. Curabitur eu nisl nulla. Nunc urna quam, fringilla ut bibendum sit amet, facilisis in enim. ', '2016-02-18 17:48:09', 'Guillaume'),
(5, 'Encore du lorem ipsum', 'Phasellus lobortis dolor quis libero aliquam vehicula. Sed tristique tellus augue, vitae aliquet ante tristique quis. Ut sed euismod felis. Nunc hendrerit viverra ipsum, ut sollicitudin lectus maximus sed. In ac ipsum nec ex sollicitudin iaculis. Suspendisse ac neque lorem augue. Aenean egestas quam sem, et dapibus nulla congue in. Nam rhoncus, odio nec fringilla iaculis, dui libero varius orci, in efficitur quam sem non velit. Nunc vitae ipsum sagittis, pulvinar ipsum sit amet, eleifend nisl. Mauris finibus lacus non felis ullamcorper ultrices. Duis commodo eros sed urna mollis cursus. Sed sollicitudin quis sapien et tincidunt. Vestibulum non enim consectetur lacus finibus congue eget eu mauris. Curabitur eu nisl nulla. Nunc urna quam, fringilla ut bibendum sit amet, facilisis in enim. ', '2016-02-18 17:48:09', 'Guillaume'),
(6, 'Le futur est en approche !', 'Maintenant que tout est en place, les commentaires vont faire leur arrivée !', '2016-02-18 17:49:22', 'Guillaume');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_id` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `article_id`, `auteur`, `email`, `contenu`, `date_publication`) VALUES
(1, 1, 'Guikingone', 'guillaume.loulier@hotmail.fr', 'Ah, enfin un blog !', '2016-02-26 17:19:53'),
(2, 6, 'Guikingone', 'guillaume.loulier@hotmail.fr', 'Voilà, on peut enfin commenter !', '2016-02-26 17:22:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
