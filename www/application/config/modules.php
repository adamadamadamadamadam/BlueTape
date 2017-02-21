<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['module-names'] = array(
    'TranskripRequest' => 'Cetak Transkrip',
    'TranskripManage' => 'Manajemen Cetak Transkrip',
    'PerubahanKuliahRequest' => 'Perubahan Kuliah',
    'PerubahanKuliahManage' => 'Manajemen Perubahan Kuliah',
	'LihatJadwalMingguan' => 'Lihat Jadwal Mingguan',
	'EntryJadwalMingguan' => 'Entry Jadwal Mingguan'
);

$config['modules'] = array(
    'TranskripRequest' => array('root', 'mahasiswa.ftis'),
    'TranskripManage' => array('root', 'tu.ftis'),
    'PerubahanKuliahRequest' => array('root', 'staf.unpar'),
    'PerubahanKuliahManage' => array('root', 'tu.ftis'),
	'EntryJadwalMingguan' => array('root', 'dosen.ftis'),
	'LihatJadwalMingguan' => array('root', 'mahasiswa.ftis')
);

$config['roles'] = array(
    'root' => array('pascal@unpar.ac.id', 'shao.wei@unpar.ac.id'),
    'tu.ftis' => array('shao.wei@unpar.ac.id', 'pranyoto@unpar.ac.id', 'walip@unpar.ac.id'),
    'mahasiswa.ftis' => '7[123]\\d{5}@student\\.unpar\\.ac\\.id',
    'staf.unpar' => '.+@unpar\\.ac\\.id',
	'dosen.ftis' => array ('cheni@unpar.ac.id', 'mariskha@unpar.ac.id', 'nico@unpar.ac.id', 'anung@unpar.ac.id', 'moertini@unpar.ac.id', 'aditya-bagoes@unpar.ac.id', 'chandraw@unpar.ac.id', 'elisatih@unpar.ac.id', 'gkarya@unpar.ac.id', 'husnulhakim@unpar.ac.id', 'joanna@unpar.ac.id', 'lionov@unpar.ac.id', 'luciana@unpar.ac.id', 'claudio-fransicus@unpar.ac.id', 'pascal@unpar.ac.id', 'rosad5@unpar.ac.id', 'vania-natali@unpar.ac.id')
);
