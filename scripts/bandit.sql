CREATE TABLE yii2basic.article (
  id INT PRIMARY KEY AUTO_INCREMENT,
  page_id int(11) NOT NULL DEFAULT 0 COMMENT 'cnbetaҳ����',
  title VARCHAR(100) NOT NULL DEFAULT '' COMMENT '����',
  content TEXT NOT NULL  COMMENT '��������',
  excerpt varchar(255) NOT NULL DEFAULT '' COMMENT 'ժҪ',
  main_image VARCHAR(255) NOT NULL DEFAULT '' COMMENT '',
  images varchar(1000) NOT NULL DEFAULT '' COMMENT '',
  author varchar(100) NOT NULL DEFAULT  '' COMMENT '����',
  text_direction varchar(10)  NOT NULL DEFAULT 'ltr' COMMENT '�����Ű�˳��'
) DEFAULT CHARSET = utf8mb4 ENGINE innodb;


CREATE TABLE yii2basic.article_list(
  id INT PRIMARY KEY AUTO_INCREMENT,
  sid INT(11) NOT NULL DEFAULT  0 ,
  catid INT(10) NOT NULL DEFAULT 0,
  topic int(11) NOT NULL DEFAULT 0,
  aid varchar(20) NOT NULL DEFAULT '' COMMENT '����id',
  user_id INT(11) NOT NULL DEFAULT 0,
  title varchar(100) NOT NULL DEFAULT '',
  keywords varchar(50) NOT NULL DEFAULT '' ,
  comments INT(10) NOT NULL DEFAULT 0 COMMENT '��������',
  counter INT(10) NOT NULL DEFAULT 0 COMMENT '���ʴ���',
  mview INT(10) NOT NULL DEFAULT 0,
  collectnum INT(10) NOT NULL DEFAULT 0,
  good INT(10) NOT NULL DEFAULT 0 COMMENT '����',
  bad INT(10) NOT NULL DEFAULT 0 COMMENT '����',
  score INT(10) NOT NULL DEFAULT 0,
  ratings INT(10) NOT NULL DEFAULT 0,
  score_story INT(10) NOT NULL DEFAULT 0 ,
  ratings_story INT(10) NOT NULL DEFAULT 0,
  pollid INT(10) NOT NULL DEFAULT 0,
  queueid INT(10) NOT NULL DEFAULT 0,
  inputtime VARCHAR(20) NOT NULL DEFAULT '' COMMENT '�Ƽ�ʱ��',
  updatetime INT(11) NOT NULL DEFAULT 0 COMMENT '������ʱ��',
  thumb varchar(255) NOT NULL DEFAULT '' COMMENT '����ͼ',
  source varchar(50) NOT NULL DEFAULT '' COMMENT '��Դ����',
  sourceid INT(10) NOT NULL DEFAULT 0 COMMENT '��Դ���',
  premium INT(10) NOT NULL DEFAULT 0,
  url_show VARCHAR(255) NOT NULL DEFAULT '' COMMENT '�ֻ�����ʵ�ַ',
  label VARCHAR(50) NOT NULL DEFAULT '' COMMENT '���±�ǩ',
  url VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'pc����ʵ�ַ'

)DEFAULT CHARSET = utf8mb4 ENGINE innodb;