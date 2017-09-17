create table wcs(
  id varchar(20) primary key,
  password varchar(20),
  email varchar(200)
);

insert into wcs values('aoki00', '123456', 'aoki00@gmail.com');
insert into wcs values('user02', 'pass02', 'user02@itcaret.com');
insert into wcs values('user03', 'pass03', 'user03@kronos.jp');
insert into wcs values('risa', 'risa1209', 'risa@gmail.com');


<div class="col s2">
  <img src="images/risa.jpg" alt="" class="circle responsive-img">
  <?php echo $works[$i][0]; ?>
</div>
