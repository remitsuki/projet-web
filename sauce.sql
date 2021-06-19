-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 19 Juin 2021 à 12:00
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `saucesite`
--

-- --------------------------------------------------------

--
-- Structure de la table `sauce`
--

CREATE TABLE `sauce` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(16) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `niveau` int(1) NOT NULL DEFAULT '1',
  `marque` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sauce`
--

INSERT INTO `sauce` (`id`, `image`, `nom`, `prix`, `quantite`, `description`, `niveau`, `marque`) VALUES
(1, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.iloveamericanfood.com%2F107976-large_default%2Fragu-pizza-sauce-homemade-style-140-oz.jpg&f=1&nofb=1', 'Ragu pizza', 88, 69, 'Sauce pour pizza Ragu', 3, 'Ragu'),
(2, 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpngimg.com%2Fuploads%2Fsauce%2Fsauce_PNG52.png&f=1&nofb=1', 'Sauce piquante biggs', 2, 69, 'Sauce biggs Huston piquant', 9, 'Huston'),
(3, 'https://boucherie.swisshallal.ch/486-large_default/sauce-biggy-burger.jpg', 'Biggy Burger', 9999, 69, 'Lorem Ipsum', 2, 'Nawhal\'s'),
(4, 'https://d36rz30b5p7lsd.cloudfront.net/kraftbrands/france/product/images/Packshots/HZ-AMERICAN-BURGER-220ML.png', 'Sauce pour Burger', 1, 69, 'Découvrez le goût de l\'Amérique avec l\'American Burger Sauce de Heinz. Une sauce onctueuse à base de tomates, avec des émincés d\'échalotes et de persil, pour raviver vos papilles.\r\nPour relever vos plats les plus divers : poissons, crustacés, volailles, veau, crevettes, avocat, œuf dur... ou simplement pour agrémenter votre sandwich.Cette bouteille allie design et praticité : elle est transparente et brillante comme du verre et souple pour une utilisation plus facile. Elle est équipée d\'un bouchon d\'une ouverture assez grande pour laisser passer les morceaux de légumes/condiments.', 2, 'Heinz'),
(5, 'https://www.hotdogworld.fr/708-large_default/sauce-barbecue-bbq-heinz.jpg', 'Barbecue', 7, 69, 'Barbecue sauce', 4, 'Heinz'),
(6, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Faz836796.vo.msecnd.net%2Fmedia%2Fimage%2Fproduct%2Fen%2Flarge%2F0006810000276.jpg&f=1&nofb=1', 'Sauce Big Mac', 1000, 69, 'La mythique sauce de votre burger préféré!', 1, 'McDonald'),
(7, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F33%2F1d%2F89%2F331d89754979b1b60c8e89a6a966f404.png&f=1&nofb=1', 'Sauce Creamy Deluxe', 30, 69, 'Sauce inimitable pour vos potatoes !', 1, 'McDonald'),
(8, 'https://www.sushiba.com/userfiles/catalog/product/thumbs/sauce%20soja%20maxi-600x600-white.png', 'Sauce soja', 4, 69, 'La sauce soja la plus célèbre au monde.', 3, 'KIKKOMAN'),
(9, 'https://cdn.metro-group.com/fr/fr_pim_814497001001_01.png?w=400&h=400&mode=pad', 'Sauce soja sucrée', 4.97, 69, 'Vous adorez la sauce soja sucrée de votre restaurant japonais préféré ? Ne cherchez plus, vous l\'avez trouvé ! Voici la sauce soja sucrée Kikkoman.', 1, 'KIKKOMAN'),
(10, 'https://www.epicesdumonde.com/406-large_default/harissa.jpg', 'Harissa', 1.2, 69, 'Je suis donc une purée de piments rouges. Les piments dont je suis issue sont récoltés à la mi-juillet. Des ouvrières en réalisent ensuite des guirlandes. Puis, ces guirlandes sont exposées au soleil pour être séchées. Une fois secs, les piments sont alors broyés et mélangés avec de l’ail, du sel, du cumin et de l’huile d’olive.', 9, 'Le phare du Cap Bon'),
(11, 'https://d36rz30b5p7lsd.cloudfront.net/kraftbrands/france/product/images/Packshots/HZ-ALGERIENNE-SAUCE-220ML-HD.png', 'Sauce Algérienne', 7, 69, 'Une sauce aux saveurs relevées qui donnera du piment à vos plats.\r\nUn incontournable du fast food, découvrez notre sauce Algérienne qui accompagnera à merveille tous vos plats, pour un usage quotidien !\r\nLa subtile combinaison de piments, d\'épices, de tomates et d\'oignons donne un goût unique à cette sauce !', 8, 'Heinz'),
(12, 'https://www.suziwan.fr/images/default-source/Product/packshot/appetizers/sauce-aigre-douce-suzi-wan.png?sfvrsn=10', 'Sauce à dipper aigre-douce', 7, 69, 'Une sauce aigre-douce à base de tomate, poivron, oignon, piment, citron et ananas à déguster froide avec des chips crevette en apéritif ou encore en entrée avec des nems.', 5, 'Suzi Wan'),
(13, 'https://www.esanandro.com/web/image/product.template/15442/image_1024?unique=6a5bdeb', 'Mayonnaise', 3.49, 69, 'Une huile de colza et des oeufs de poules élevées en plein air 100% français. Onctueuse et gourmande, sa texture vient de l\'émulsion de l\'huile et du jaune d\' oeuf. BORIS Son goût délicat est apporté par la moutarde Et en plus, elle est aux oeufs de poules élevées en plein air! ', 3, 'Lesieur'),
(14, 'https://www.maille.ca/fr/produits/moutardes/img/dijon-original-mustard.png', 'Moutarde classique', 75, 69, 'La légendaire moutarde Maille dans sa forme originale, créée pour relever les saveurs et émerveiller vos sens. Elle vous transporte en un instant au cœur de la Bourgogne, donnant une toute nouvelle dimension à de nombreux plats, du plus simple au plus sophistiqué, leur apportant relief et raffinement. Parfaite avec de la purée de pommes de terre et des toasts au fromage, c\'est aussi un régal dans un risotto servi avec un rôti. Un ingrédient essentiel pour votre placard à condiments et un indispensable pour les passionnés de cuisine.', 8, 'Maille'),
(15, 'https://drive.quesaquo.fr/web/image/product.template/1942/image', 'Moutarde à l\'ancienne', 68.99, 69, 'Chez Maille, les graines de moutarde sont sélectionnées avec soin à partir des meilleurs plants de graine Brassica Juncea avant d\'être mélangées au verjus et broyées. Grâce à cette tradition, pérpétuée à Dijon depuis des siècles, Maille vous offre ainsi une moutarde aux grains croquants et au goût puissant.', 5, 'Maille'),
(16, 'https://dca-distribution.fr/67791-large_default/sauce-blanche-unite-500ml-nawhal-s.jpg', 'Sauce blanche', 2.15, 69, 'La super sauce blanche spéciale kebabbier.', 3, 'Nawhal\'s'),
(17, 'https://d167y3o4ydtmfg.cloudfront.net/krafts/444/1578645482441_540x540.png', 'Ketchup', 3.64, 0, 'La recette du Tomato ketchup Heinz, créée il y a plus d\'un siècle et gardée secrète depuis, est empreinte de son fameux goût de tomates et d\'épices. Légumes, viandes ou poissons, le ketchup Heinz agrémente tous vos plats à merveille.Chez Heinz nous développons nos propres graines, sans OGM. Cultivées en plein air et nos tomates sont alors cueillies à maturité en été, puis transformées en Tomato Ketchup selon notre fameuse recette ... sans conservateur ni épaississant ajouté ! Adepte du style rétro? Optez pour le Tomato Ketchup Heinz dans sa mythique bouteille en verre !', 2, 'Heinz'),
(18, 'https://d36rz30b5p7lsd.cloudfront.net/kraftbrands/france/product/images/Packshots/HZ-THREE-PEPPER-SAUCE-220ML-HD.png', 'Sauce aux poivres', 8.99, 12, 'Un subtil mariage de poivres.Heinz vous invite à voyager avec cette sauce 3 Poivres dont les poivres proviennent d\'Inde et d\'Indonésie. Ces ingrédients prestigieux, revus à la sauce Heinz, donnent un résultat subtilement caramélisé, intense et exotique. Parfait pour vos grillades ou en dipping pour accompagner vos apéritifs épicés.', 7, 'Heinz'),
(19, 'https://cdn1.charal.fr/wp-content/uploads/2015/10/Sauce-Roquefort-1.png', 'Sauce roquefort', 115, 9, 'L\'exigence et la qualité Charal sont réunies dans cette sauce au roquefort crémeuse pour un résultat « fait maison ». Elle rehausse parfaitement la saveur d’une entrecôte, de préférence bleue ou saignante.\r\nElle se prépare en un clin d\'œil grâce à son sachet micro-ondable.', 6, 'Charal'),
(20, 'https://cdn1.charal.fr/wp-content/uploads/2015/10/Sauce-Figue-Sauterne.png', 'Sauce foie gras', 645, 2, 'Innovez lors des repas de fêtes avec cette sauce au bloc de foie gras de canard au goût subtil et léger. Dégustez-la avec un tournedos de bœuf bien tendre, de préférence bleu ou saignant.\r\nElle se prépare en un clin d\'œil grâce à son sachet micro-ondable.', 2, 'Charal'),
(22, '', 'Moutarde extra forte', 14, 967, 'La moutarde Hot Dijon est le résultat d\'une sélection attentive de matières premières de qualité et le mélange parfait de moutarde et de poivre noir pour renforcer le piquant et donner un goût aromatique. Le piquant est la condition pour avoir un goût ou une odeur acerbés et renforcés. ', 9, 'Maille'),
(23, 'https://ws.mcdonalds.fr/media/9a/e5/da/9ae5dae621380c6ce286241905f5bfb126d9303b', 'Sauce Classic Moutarde', 65.02, 125000, ' Ingrédients : eau, sucre, vinaigre d\'alcool, huile de colza, sirop de glucose-fructose, graines de moutarde (6,0%), sel, amidon modifié de maïs, jaune d\'œuf, arôme, épices, sirop de sucre caramélisé, épaississant (E 415).\r\n\r\nA conserver à température ambiante', 8, 'McDonald');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sauce`
--
ALTER TABLE `sauce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sauce`
--
ALTER TABLE `sauce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
