create table `posts`(
`id` int(11) not null auto_increment,
`titulo` varchar(100) not null,
`conteudo` text not null,
`autor` varchar(30) not null,
`datacriacao` date not null default current_timestamp(),
`dataupdate` date not null default current_timestamp(),
primary key('id')
)