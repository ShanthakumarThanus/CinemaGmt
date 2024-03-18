CREATE DATABASE IF NOT EXISTS `cinema` /*création bd si non existant */;
USE `cinema`;

CREATE TABLE IF NOT EXISTS film (
  film_id int(11) NOT NULL DEFAULT '0',
  title varchar(255) DEFAULT NULL,
  description varchar(255) DEFAULT NULL,
  annee int(11) DEFAULT NULL,
  length int(11) DEFAULT NULL,
  prix_place float DEFAULT NULL,
  PRIMARY KEY (film_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;

INSERT INTO film (film_id, title, description, annee, length, prix_place) VALUES
(1,'SHREK', 'Un ogre laid et misanthrope, Shrek, vit tranquille et heureux dans la saleté au milieu d''un marais qu''il croit un havre de paix. Mais un jour, son espace est envahi de créatures de contes de fées expulsées par le tyrannique Lord Farquaad. Shrek, flanqué de L''Âne très bavard, part demander des comptes au seigneur.', 
2001, 89, 8.30),
(2, 'SHREK 2', 'Le père de Fiona n''accepte pas que son gendre soit un ogre. Il tente de le faire assassiner par le Chat potté, un spadassin. Mais en affrontant l''ogre, ce dernier se rend compte que Shrek n''est pas un ennemi et se joint à lui dans le but de se faire pardonner.', 
2004, 93, 8.35),
(3, 'SHREK 3', 'Alors que le roi Harold se meurt, Shrek et Fiona se voient obligés de régner sur le royaume de Fort Fort Lointain. Sur son lit de mort, le roi leur annonce cependant qu''il existe un autre héritier possible au trône...', 
2007, 93, 8.40);