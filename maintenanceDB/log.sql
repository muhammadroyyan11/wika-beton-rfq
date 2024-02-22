ALTER TABLE `rfq_request` CHANGE `omzet_kontrak` `omzet_kontrak` VARCHAR(100) NOT NULL DEFAULT '0', CHANGE `omzet_penjualan` `omzet_penjualan` VARCHAR(100) NOT NULL DEFAULT '0', CHANGE `termin` `termin` VARCHAR(100) NOT NULL DEFAULT '0';

-- project 3
ALTER TABLE `rfq_request` ADD `pic_se` TEXT NOT NULL AFTER `RFQNumber`, ADD `total_vol` TEXT NOT NULL AFTER `pic_se`, ADD `lkb` TEXT NOT NULL AFTER `total_vol`, ADD `tgl_penawaran` DATE NULL DEFAULT NULL AFTER `lkb`, ADD `p_ke` TEXT NOT NULL AFTER `umur_penawaran`;