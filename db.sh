#mysql "CREATE test IDENTIFIED BY 'test';"
#mysql "GRANT ALL ON *.* TO test"

#データベースdotolistの削除
mysql -uroot -e"drop database todolist;"

#データベースdotolistの作成
mysql -uroot -e"create database todolist character set utf8;"

#テーブルlist作成
mysql -uroot todolist -e "create table list(id MEDIUMINT NOT NULL AUTO_INCREMENT,task varchar(256) NOT NULL, PRIMARY KEY(id));"

#行の追加
#mysql "INSERT INTO list add(task) VALUE($)"
#mysql "show databases;"

