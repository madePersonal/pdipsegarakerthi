<?php
ini_set('mysql.connect_timeout', 15000);
ini_set('default_socket_timeout', 15000);
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        // $this->db2 = $this->load->database('datamasyarakat', TRUE);
    }

    function get_all_desa()
    {
        $this->db->select('*')
            ->join('ref_kec', 'kec_id=ref_desa.desa_kec_id')
            ->join('ta_pr', 'pr_kec_id=ref_kec.kec_id AND pr_desa_id=ref_desa.desa_id')
            ->join('ref_anggota', 'anggota_id=pr_anggota_id')
            ->join('ref_jabatan', 'jabatan_id=pr_jabatan_id')
            ->join('ref_tingkat', 'tingkat_id=jabatan_tingkat_id')
            ->where('pr_jabatan_id', 31);
        return $this->db->get('ref_desa')->result();
    }

    function get_all_kecamatan()
    {
        $this->db->select('*')
            ->join('ta_pac', 'pac_kec_id=ref_kec.kec_id')
            ->join('ref_anggota', 'anggota_id=pac_anggota_id')
            ->join('ref_jabatan', 'jabatan_id=pac_jabatan_id')
            ->join('ref_tingkat', 'tingkat_id=jabatan_tingkat_id')
            ->where('pac_jabatan_id', 20);
        return $this->db->get('ref_kec')->result();
    }

    function get_kecamatan(){
        $this->db->select('*');
        return $this->db->get('ref_kec')->result();
    }

    function get_desa($kec){
        $this->db->select('*')
        ->where('desa_kec_id', $kec);
        return $this->db->get('ref_desa')->result();
    }

    function get_banjar($kec, $desa){
        $this->db->select('*')
        ->where('banjar_desa_id', $desa)
        ->where('banjar_kec_id', $kec);
        return $this->db->get('ref_banjar')->result();
    }

    function get_dpc(){
        $this->db->select('*')
            ->join('ref_anggota', 'anggota_id=dpc_anggota_id')
            ->join('ref_jabatan', 'jabatan_id=dpc_jabatan_id')
            ->join('ref_tingkat', 'tingkat_id=jabatan_tingkat_id');
        return $this->db->get('ta_dpc')->result();
    }

    function get_ketua_dpc(){
        $this->db->select('*')
            ->join('ref_anggota', 'anggota_id=dpc_anggota_id')
            ->join('ref_jabatan', 'jabatan_id=dpc_jabatan_id')
            ->join('ref_tingkat', 'tingkat_id=jabatan_tingkat_id')
            ->where('dpc_jabatan_id', 1);
        return $this->db->get('ta_dpc')->row();
    }

    function get_all_pac($id){
        $this->db->select('*')
            ->join('ref_anggota', 'anggota_id=pac_anggota_id')
            ->join('ref_jabatan', 'jabatan_id=pac_jabatan_id')
            ->join('ref_tingkat', 'tingkat_id=jabatan_tingkat_id')
            ->where('pac_kec_id', $id);
        return $this->db->get('ta_pac')->result();
    }

    function get_all_pr($kec, $desa){
        $this->db->select('*')
            ->join('ref_anggota', 'anggota_id=pr_anggota_id')
            ->join('ref_jabatan', 'jabatan_id=pr_jabatan_id')
            ->join('ref_tingkat', 'tingkat_id=jabatan_tingkat_id')
            ->where('pr_kec_id', $kec)
            ->where('pr_desa_id', $desa);
        return $this->db->get('ta_pr')->result();
    }

    function get_all_par($kec, $desa, $banjar){
        $this->db->select('*')
            ->join('ref_anggota', 'anggota_id=par_anggota_id')
            ->join('ref_jabatan', 'jabatan_id=par_jabatan_id')
            ->join('ref_tingkat', 'tingkat_id=jabatan_tingkat_id')
            ->where('par_kec_id', $kec)
            ->where('par_desa_id', $desa)
            ->where('par_banjar_id', $banjar);
        return $this->db->get('ta_par')->result();
    }

    function get_berita($no, $offset){
        $this->db->select('ta_berita.*, ref_user.user_nama')
            ->join('ref_user', 'user_id=berita_user_id')
            ->order_by('berita_tanggal', 'desc')
            ->limit($no, $offset);
        return $this->db->get('ta_berita')->result();
    }

    function get_detail_berita($slug){
        $this->db->select('ta_berita.*, ref_user.user_nama')
            ->join('ref_user', 'user_id=berita_user_id')
            ->where('berita_slug', $slug);
        return $this->db->get('ta_berita')->row();
    }

    function get_informasi($no, $offset){
        $this->db->select('ta_informasi.*, ref_user.user_nama')
            ->join('ref_user', 'user_id=informasi_user_id')
            ->order_by('informasi_tanggal', 'desc')
            ->limit($no, $offset);
        return $this->db->get('ta_informasi')->result();
    }

    function get_detail_informasi($slug){
        $this->db->select('*')
            ->join('ref_user', 'user_id=informasi_user_id')
            ->where('informasi_slug', $slug);
        return $this->db->get('ta_informasi')->row();
    }

    function get_top_informasi($no, $offset){
        $this->db->select('ta_informasi.*')
            ->order_by('informasi_tanggal', 'desc')
            ->limit($no, $offset);
        return $this->db->get('ta_informasi')->result();
    }

    function get_top_video($no, $offset){
        $this->db->select('*')
            ->order_by('galeri_video_tanggal', 'desc')
            ->limit($no, $offset);
        return $this->db->get('ta_galeri_video')->result();
    }

    function get_top_berita($no, $offset){
        $this->db->select('*')
            ->order_by('berita_tanggal', 'desc')
            ->limit($no, $offset);
        return $this->db->get('ta_berita')->result();
    }

    function get_top_slider($no, $offset){
        $this->db->select('*')->limit($no, $offset);
        return $this->db->get('ta_slider')->result();
    }

    function get_foto($no, $offset){
        $this->db->select('*')
            ->order_by('galeri_foto_tanggal', 'desc')
            ->limit($no, $offset);
        return $this->db->get('ta_galeri_foto')->result();
    }

    function get_video($no, $offset){
        $this->db->select('*')
            ->order_by('galeri_video_tanggal', 'desc')
            ->limit($no, $offset);
        return $this->db->get('ta_galeri_video')->result();
    }





    function cek_nik($nik)
    {
        $this->db2->select('*');
        $this->db2->where('NIK_EKTP', $nik);
        return $this->db2->get('dat_masyarakat')->row();
    }

    function add_pasien($data)
    {
        return $this->db->insert('ref_pasien', $data);
    }

    function update_pasien($id, $data)
    {
        $this->db->where('pasien_id', $id);
        return $this->db->update('ref_pasien', $data);
    }

    function list_pasien_operator($id)
    {
        $this->db->select('*');
        $this->db->where('pasien_lokasi_id', $id);
        $this->db->order_by('pasien_id', 'desc');
        return $this->db->get('ref_pasien')->result();
    }

    function list_pasien_superadmin()
    {
        $this->db->select('*')
            ->join('ref_lokasi', 'lokasi_id=pasien_lokasi_id')
            ->order_by('pasien_id', 'desc');
        return $this->db->get('ref_pasien')->result();
    }
    function list_lokasi()
    {
        $this->db->select('*');
        return $this->db->get('ref_lokasi')->result();
    }

    function delete_pasien($id)
    {
        $this->db->where('pasien_id', $id);
        return $this->db->delete('ref_pasien');
    }

    function selesai_pasien($id, $data)
    {
        $this->db->where("pasien_id", $id);
        return $this->db->update('ref_pasien', $data);
    }

    function pindah_pasien($id, $data)
    {
        $this->db->where("pasien_id", $id);
        return $this->db->update('ref_pasien', $data);
    }

    function cek_pasien($nik)
    {
        return $this->db->select('*')->join('ref_lokasi', 'ref_lokasi.lokasi_id = ref_pasien.pasien_lokasi_id','left')->where('pasien_nik', $nik)->order_by('pasien_id','desc')->limit(1)->get('ref_pasien')->row();
    }

    function detail_pasien($id)
    {
        $this->db->select('*');
        $this->db->where('pasien_id', $id);
        return $this->db->get('ref_pasien')->row();
    }
}
