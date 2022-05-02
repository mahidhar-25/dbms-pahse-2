use test;
INSERT INTO user_db VALUES (1, 'user1', 'pass1');
CREATE Table user_form(id INT PRIMARY KEY, name VARCHAR(255),email VARCHAR(255), password VARCHAR(255),user_type VARCHAR(255));
SELECT * FROM user_form;
-- create movies TABLE
CREATE Table movies(movie_name VARCHAR(255),release_year VARCHAR(4),genre VARCHAR(255),cast VARCHAR(255));
ALTER TABLE movies ADD COLUMN rating VARCHAR(255);
ALTER TABLE movies ADD COLUMN review VARCHAR(255);
INSERT INTO movies VALUES ('The Shawshank Redemption','1994','Drama','Tim Robbins,Morgan Freeman,Bob Gunton');
UPDATE movies SET rating='4.5/5' WHERE movie_name='The Shawshank Redemption';
UPDATE movies SET review="Must watch" WHERE movie_name='The Shawshank Redemption';
INSERT INTO movies VALUES ('The Godfather','1972','Crime','Marlon Brando,Al Pacino,James Caan');
UPDATE movies SET rating='4.8/5' WHERE movie_name='The Godfather';
UPDATE movies SET review="Must watch" WHERE movie_name='The Godfather';
INSERT INTO movies VALUES ('The Godfather: Part II','1974','Crime','Al Pacino,Robert De Niro,Robert Duvall');
INSERT INTO movies VALUES ('The Dark Knight','2008','Action','Christian Bale,Heath Ledger,Aaron Eckhart');
UPDATE movies SET rating='4.9/5' WHERE movie_name='The Dark Knight';
UPDATE movies SET review="Awesome" WHERE movie_name='The Dark Knight';
select * from movies;