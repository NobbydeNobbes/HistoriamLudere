CREATE DATABASE historiam ludere;

USE historiam ludere;

CREATE TABLE characters(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    biography TEXT,
    portrait VARCHAR(350)
);

insert into characters
(firstname, lastname, biography, portrait)
values
("Harald", "Fairhair",
"Harald Fairhair est un personnage mythique de diverses sagas scandinaves. Il n'a jamais existé.",
"C:\xampp\htdocs\HistoriamLudere\public\assets\img\HaraldFinehair.png" )