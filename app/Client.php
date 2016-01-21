<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $table = 'clientes';
    protected $fillable = ['nombre_cliente', 'web', 'nombre_contacto', 'direccion', 'cargo', 'correo', 'telefono', 'ejecutivo_a_cargo', 'ftp_host', 'ftp_ip', 'ftp_user', 'ftp_pass', 'ftp_url', 'cms_user', 'cms_pass', 'cms_url', 'auth_user',
        'auth_pass', 'auth_url', 'email_email', 'email_pass', 'face_user', 'face_pass', 'face_url', 'pint_user', 'pint_pass', 'pint_url',
        'twit_user', 'twit_pass', 'twit_url', 'link_user', 'link_pass', 'link_url', 'status'];





}
