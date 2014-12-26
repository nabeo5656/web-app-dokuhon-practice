DROP TABLE IF EXISTS posts;
CREATE TABLE posts (
  id integer primary key not null auto_increment,
  nickname text not null,
  body text not null,
  created_at datetime not null,
  updated_at datetime not null
);
