SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `body` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `pages` (`id`, `title`, `url`, `body`, `created`, `updated`) VALUES
(3, 'Home', '', '<h1>PÃ¡gina Inicial do Site</h1><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;php.jpg&quot;,&quot;filesize&quot;:59886,&quot;height&quot;:500,&quot;href&quot;:&quot;/upload/16856783565c7d839da2fef5.91736459.jpg&quot;,&quot;url&quot;:&quot;/upload/16856783565c7d839da2fef5.91736459.jpg&quot;,&quot;width&quot;:500}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpg\"><a href=\"/upload/16856783565c7d839da2fef5.91736459.jpg\"><img src=\"/upload/16856783565c7d839da2fef5.91736459.jpg\" width=\"500\" height=\"500\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">php.jpg</span> <span class=\"attachment__size\">58.48 KB</span></figcaption></a></figure></div><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a metus ut massa pretium fermentum sed quis justo. Etiam vel nulla ex. Proin a nunc massa. Praesent mollis nec urna id condimentum. Nulla sit amet blandit arcu. Sed quis felis lobortis, convallis mauris eget, viverra urna. Donec malesuada ligula vitae hendrerit gravida. Aenean ut metus ut orci congue sodales. Maecenas ac eros erat. In eros turpis, faucibus in porttitor in, aliquet non enim. Praesent in enim venenatis, sollicitudin ante ut, vulputate est. Sed lectus ipsum, scelerisque vitae velit in, cursus tempor odio.<br><br></div><ul><li>Lorem ipsum dolor sit amet;</li><li>Consectetur adipiscing elit.</li></ul><div><br></div><div>Curabitur ultricies sapien nisi, non luctus ex sagittis ut. Aenean gravida tempus leo vehicula commodo. Morbi finibus ultricies ipsum, mattis blandit sem semper vitae. Phasellus id porta libero, non tempus eros. Curabitur eget libero nibh. Etiam mollis nibh vel pulvinar dignissim. Duis euismod nec lectus id dictum. Nunc elementum quam eget tortor porttitor congue.<br><br></div><div>Duis vulputate finibus sapien, at scelerisque nisl lobortis vitae. Integer vel porta velit. Pellentesque egestas ultrices sapien, id euismod nunc iaculis at. Ut aliquam, sem aliquam ullamcorper mattis, tellus tellus dapibus dolor, eu facilisis quam turpis eget enim. In at lacus in tellus tristique finibus vitae eu tellus. Nullam iaculis dictum elementum. Cras in interdum velit. Curabitur id tortor ac sem tempus scelerisque vel vestibulum turpis. Vivamus rhoncus justo urna, ut placerat libero iaculis id. Donec posuere nunc non enim hendrerit, nec malesuada justo imperdiet. Sed laoreet at augue eget semper. Fusce interdum tincidunt nunc id finibus. Vestibulum leo nisl, facilisis eget fringilla sed, aliquam in neque. Vivamus neque augue, posuere congue dignissim vitae, rhoncus sit amet arcu.<br><br></div><div>Nam in tortor a mi vulputate vehicula. Proin ac libero at orci viverra dictum at et nulla. Cras ut augue luctus, porttitor nulla a, accumsan est. Suspendisse potenti. Integer efficitur erat sapien, id auctor urna dignissim eget. Aenean consectetur suscipit purus, ac commodo libero interdum tincidunt. Nulla at nunc pretium, consequat lacus nec, finibus ante.<br><br></div><div>Nullam porttitor auctor ante, ut tempus magna elementum nec. Nam pulvinar lectus justo, et tincidunt tellus efficitur porttitor. Quisque nec mattis nisl. Curabitur maximus, nisi eget convallis tristique, metus libero commodo purus, ac ullamcorper lacus tortor vitae enim. Proin suscipit semper enim et pulvinar. Ut scelerisque enim nec ipsum fringilla cursus. Nullam eget lectus felis. Nullam id iaculis lectus. Etiam eu diam non velit rutrum molestie. Nam lobortis venenatis urna. Integer quis maximus enim. Pellentesque sollicitudin neque felis, hendrerit volutpat tellus pulvinar non. Vestibulum vulputate suscipit sapien, at elementum dui egestas eu. Praesent ultrices quam at magna elementum malesuada.</div>', '2019-03-04 13:33:51', '2019-03-05 13:28:20'),
(4, 'Sobre NÃ³s', 'sobre-nos', '<h1>Um Pouco Sobre Nossa Empresa</h1><div><br>orem ipsum dolor sit amet, consectetur adipiscing elit. In dapibus est leo, vitae semper ligula luctus et. Ut aliquam eget lorem non elementum. Integer rhoncus libero at gravida volutpat. Praesent metus nulla, rutrum et rhoncus eu, vestibulum eu dolor. Nullam tristique lacus nibh, at finibus diam porttitor vitae. Nam quis orci sed lectus commodo eleifend. Etiam dapibus ipsum eget ante congue euismod. Aliquam imperdiet nec nunc nec efficitur. Integer mattis, orci quis placerat ornare, lorem nisl volutpat lorem, non ultricies risus nulla eget sem. Aliquam in malesuada ante, et feugiat massa. Aenean in augue quis tortor tristique commodo nec at sapien. Morbi id vehicula elit.<br><br></div><blockquote>In venenatis efficitur elementum.</blockquote><div><br></div><div>Vestibulum euismod at augue ut sagittis. Praesent elementum felis ac viverra accumsan. Quisque eu nulla ut dui malesuada mollis at nec nunc. Nam rhoncus volutpat nulla non venenatis. Donec aliquam ex ut dolor vulputate molestie. Pellentesque euismod ipsum eu libero placerat suscipit. Aenean a varius nisl. In eleifend urna eu enim ultricies efficitur. Aenean nec dapibus ligula, id ultricies purus. Vivamus in mi tellus. Mauris elementum magna eget ante lobortis maximus. Pellentesque facilisis sit amet eros eu tincidunt. Duis nec rutrum lorem, sit amet accumsan neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lacinia nulla sed lectus malesuada, tempus consectetur felis eleifend. Nam et urna fringilla risus hendrerit vestibulum.<br><br></div>', '2019-03-05 13:29:31', '2019-03-05 13:29:31');

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `email`, `password`, `created`, `updated`) VALUES
(2, 'edersonluis.rf@gmail.com', '$2y$10$VQiHdFahCPquVt.FAQnqMORP/0jKcJj1pFWyZX.ht/zgNns3S7UoC', '2019-03-04 15:16:06', '2019-03-04 18:18:13');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
