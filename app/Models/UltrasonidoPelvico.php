<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UltrasonidoPelvico extends Model
{

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        "edad", "gesta", "parto", "aborto", "cesarea", "legrado", "bordes", "ecos_interior", "utero", "forma", "paredes", "longitud", "ancho", "grosor", "masa_uterino",
        "masa_uterino_cuantas", "mediciones", "presencia_tabique", "tabique_medicion", "endometrio", "endometrio_modo", "cavidad_endometrial", "dispositivo_intrauterino",
        "saco_gestional", "saco_gestional_bordes", "reaccion_coridodecidual", "presencia_vesicula", "presencia_yema", "vitalidad", "longitud_craneo", "edad_gestacional",
        "fecha_parto", "ovario_izquierdo", "ovario_izquierdo_1", "ovario_izquierdo_2", "presencia_masa_anexial_izquierdo", "ovario_izquierdo_tipo", "ovario_izquierdo_vegetaciones",
        "ovario_izquierdo_septos", "ovario_izquierdo_irregularidad_masa", "ovario_izquierdo_vaso_nutricio", "ovario_izquierdo_patron_vascular", "ovario_derecho_1", "ovario_derecho_2",
        "presencia_masa_anexial_derecho", "ovario_derecho_tipo", "ovario_derecho_vegetaciones", "ovario_derecho_septos", "ovario_derecho_irregularidad_masa",
        "ovario_derecho_vaso_nutricio", "ovario_derecho_patron_vascular", "liquido_libre", "cantidad_liquido_libre", "ovario_ascitis", "embarazo_lcc_semanas", "comentarios", "recordatorios"
    ];

    public function consulta()
    {
        return $this->belongsTo('App\Models\Consulta', 'consulta_id');
    }
}
