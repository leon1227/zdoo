ALTER TABLE `sys_category` ADD `rights` char(30) NOT NULL;
ALTER TABLE `sys_product` ADD `line` mediumint(8) unsigned NOT NULL AFTER `status`;

-- DROP TABLE IF EXISTS `sys_cron`;
CREATE TABLE IF NOT EXISTS `sys_cron` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `m` varchar(20) NOT NULL,
  `h` varchar(20) NOT NULL,
  `dom` varchar(20) NOT NULL,
  `mon` varchar(20) NOT NULL,
  `dow` varchar(20) NOT NULL,
  `command` text NOT NULL,
  `remark` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `buildin` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL,
  `lastTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `sys_cron` (`m`, `h`, `dom`, `mon`, `dow`, `command`, `remark`, `type`, `buildin`, `status`, `lastTime`) VALUES
('*',    '*',    '*',    '*',    '*',    '',     '监控定时任务', 'zentao',       1,      'normal',       '0000-00-00 00:00:00');
