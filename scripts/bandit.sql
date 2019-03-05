CREATE TABLE yii2basic.article (
  id INT PRIMARY KEY AUTO_INCREMENT,
  page_id int(11) NOT NULL DEFAULT 0 COMMENT 'cnbeta页面编号',
  title VARCHAR(100) NOT NULL DEFAULT '' COMMENT '标题',
  content TEXT NOT NULL  COMMENT '文章正文',
  excerpt varchar(255) NOT NULL DEFAULT '' COMMENT '摘要',
  main_image VARCHAR(255) NOT NULL DEFAULT '' COMMENT '',
  images varchar(1000) NOT NULL DEFAULT '' COMMENT '',
  author varchar(100) NOT NULL DEFAULT  '' COMMENT '作者',
  text_direction varchar(10)  NOT NULL DEFAULT 'ltr' COMMENT '文章排版顺序'
) DEFAULT CHARSET = utf8mb4 ENGINE innodb;


CREATE TABLE yii2basic.article_list(
  id INT PRIMARY KEY AUTO_INCREMENT,
  sid INT(11) NOT NULL DEFAULT  0 ,
  catid INT(10) NOT NULL DEFAULT 0,
  topic int(11) NOT NULL DEFAULT 0,
  aid varchar(20) NOT NULL DEFAULT '' COMMENT '作者id',
  user_id INT(11) NOT NULL DEFAULT 0,
  title varchar(100) NOT NULL DEFAULT '',
  keywords varchar(50) NOT NULL DEFAULT '' ,
  comments INT(10) NOT NULL DEFAULT 0 COMMENT '评论数量',
  counter INT(10) NOT NULL DEFAULT 0 COMMENT '访问次数',
  mview INT(10) NOT NULL DEFAULT 0,
  collectnum INT(10) NOT NULL DEFAULT 0,
  good INT(10) NOT NULL DEFAULT 0 COMMENT '点赞',
  bad INT(10) NOT NULL DEFAULT 0 COMMENT '反对',
  score INT(10) NOT NULL DEFAULT 0,
  ratings INT(10) NOT NULL DEFAULT 0,
  score_story INT(10) NOT NULL DEFAULT 0 ,
  ratings_story INT(10) NOT NULL DEFAULT 0,
  pollid INT(10) NOT NULL DEFAULT 0,
  queueid INT(10) NOT NULL DEFAULT 0,
  inputtime VARCHAR(20) NOT NULL DEFAULT '' COMMENT '推荐时间',
  updatetime INT(11) NOT NULL DEFAULT 0 COMMENT '最后更新时间',
  thumb varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  source varchar(50) NOT NULL DEFAULT '' COMMENT '来源名称',
  sourceid INT(10) NOT NULL DEFAULT 0 COMMENT '来源编号',
  premium INT(10) NOT NULL DEFAULT 0,
  url_show VARCHAR(255) NOT NULL DEFAULT '' COMMENT '手机版访问地址',
  label VARCHAR(50) NOT NULL DEFAULT '' COMMENT '文章标签',
  url VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'pc版访问地址'

)DEFAULT CHARSET = utf8mb4 ENGINE innodb;