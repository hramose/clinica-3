<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<div class="modal fade" id="modalUpdateAtencionPrenatal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label>Fecha y Hora</label>
                            <div>
                                <input type="text" class="form-control" name="date" id="date_prenatal" readonly value="{{ date('Y-m-d h:i a') }}">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <label>Edad gestacional por ulrasonido</label>
                            <div>
                                <input type="text" class="form-control" name="edad_gestacional" id="edad_gestacinal_prenatal" value="De historia clinica" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Consutal de atencion prenatal NO</label>
                            <div>
                                <input type="text" class="form-control" name="numero" id="numero_prenatal" readonly value="{{ \App\Models\Prenatal::count() + 1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Diagnostico Previo</label>
                            <div>
                                <textarea class="form-control" name="diagnostico_previo" id="diagnostico_previo_prenatal"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label>FC</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_fc" id="signos_vitales_fc_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>FR</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_fr" id="signos_vitales_fr_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>PA</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_pa" id="signos_vitales_pa_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Peso Actual</label>
                            <div>
                                <input type="number" class="form-control" name="peso_actual" id="peso_actual_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Incremente de peso</label>
                            <div>
                                <input type="text" class="form-control" name="incremento_peso" id="incremento_peso_prenatal" readonly value="calcular con el peso anteriro de historia clinica">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Subjetivo</label>
                            <div>
                                <textarea class="form-control" name="subjetivo" id="subjetivo_prenatal"></textarea>
                            </div>
                        </div>
                    </div>
                    <p>Objetivo</p>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Estado General</label>
                            <div>
                                <select class="form-control" name="estado_general" id="estado_general_prenatal">
                                    <option value="Conciente">Conciente</option>
                                    <option value="Orientada">Orientada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Alteraciones Hemodinámicas</label>
                            <div>
                                <select class="form-control" name="alteraciones_hermodinamicas" id="alteraciones_hermodinamicas_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Alteraciones Cardiopulmonar</label>
                            <div>
                                <select class="form-control" name="alteraciones_cardiopulmonar" id="alteraciones_cardiopulmonar_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Pezon y Areola</label>
                            <div>
                                <select class="form-control" name="pezon_areola" id="pezon_areola_prenatal">
                                    <option value="Invertido">Invertido</option>
                                    <option value="Normal" selected>Normal</option>
                                    <option value="Plano">Plano</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Movimientos Fetales</label>
                            <div>
                                <select class="form-control" name="movimientos_fetales" id="movimientos_fetales_prenatal">
                                    <option value="Ausentes">Ausentes</option>
                                    <option value="Presentes">Presentes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>FCF por minuto</label>
                            <div>
                                <input type="text" class="form-control" name="fcf_minuto" id="fcf_minuto_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Actividad Uterina</label>
                            <div>
                                <input type="text" class="form-control" name="actividad_uterina" id="actividad_uterina_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Utero Grávido Abdominal</label>
                            <div>
                                <select class="form-control" name="utero_gravido" id="utero_gravido_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Utero Intrapelvico</label>
                            <div>
                                <select class="form-control" name="utero_intrapelvico" id="utero_intrapelvico_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Peristalsis</label>
                            <div>
                                <select class="form-control" name="peristalsis" id="peristalsis_prenatal">
                                    <option value="Ausente">Ausente</option>
                                    <option value="Disminuido">Disminuido</option>
                                    <option value="Presente">Presente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>AFU (cms)</label>
                            <div>
                                <input type="text" class="form-control" name="afu" id="afu_prenatal">
                            </div>
                        </div>
                    </div>
                    <p>Ginecologico</p>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Examen Ginecologico</label>
                            <div>
                                <select class="form-control" name="examen_ginecologico" id="examen_ginecologico_prenatal" data-target='examen_ginecologico_si_form'>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="examen_ginecologico_si_form" style="display: none;">
                            <div class="col-sm-3">
                                <label>Genitales externos</label>
                                <div>
                                    <select class="form-control" name="genitales_externos" id="genitales_externos_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Anormales">Anormales</option>
                                        <option value="Normales" selected>Normales</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Vagina Normo Térmica</label>
                                <div>
                                    <select class="form-control" name="vagina_normo_termica" id="vagina_normo_termica_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Vagina Normo Elástica</label>
                                <div>
                                    <select class="form-control" name="vagina_normo_elastica" id="vagina_normo_elastica_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Lesiones</label>
                                <div>
                                    <select class="form-control" name="vagina_lesiones" id="vagina_lesiones_prenatal" data-target='vagina_lesiones_si_form'>
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_lesiones_si_form" style="display: none">
                                <label>Describa Lesiones</label>
                                <div>
                                   <input type="text" class="form-control" name="vagina_lesiones_si" id="vagina_lesiones_si_prenatal">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Leucorrea</label>
                                <div>
                                    <select class="form-control" name="vagina_leucorrea" id="vagina_leucorrea_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fetidez</label>
                                <div>
                                    <select class="form-control" name="vagina_fetidez" id="vagina_fetidez_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Sangrado</label>
                                <div>
                                    <select class="form-control" name="vagina_sangrado" id="vagina_sangrado_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hidrorrea</label>
                                <div>
                                    <select class="form-control" name="vagina_hidrorrea" id="vagina_hidrorrea_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cervix</label>
                                <div>
                                    <select class="form-control" name="vagina_cervix" id="vagina_cervix_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Central">Central</option>
                                        <option value="Cerrado">Cerrado</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Permeable">Permeable</option>
                                        <option value="Posterior">Posterior</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Consistencia</label>
                                <div>
                                    <select class="form-control" name="vagina_consistencia" id="vagina_consistencia_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Borramiento">Borramiento</option>
                                        <option value="Dilatacion">Dilatacion</option>
                                        <option value="Firme">Firme</option>
                                        <option value="Reblandecido">Reblandecido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Calotas</label>
                                <div>
                                    <select class="form-control" name="vagina_calotas" id="vagina_calotas_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Membranas Integras</label>
                                <div>
                                    <select class="form-control" name="vagina_membranas_integras" id="vagina_membranas_integras_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Calotas Solidas</label>
                                <div>
                                    <select class="form-control" name="vagina_calotas_solidas" id="vagina_calotas_solidas_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Plano</label>
                                <div>
                                    <select class="form-control" name="vagina_plano" id="vagina_plano_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Pelvis</label>
                                <div>
                                    <select class="form-control" name="vagina_pelvis" id="vagina_pelvis_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Desproporcion Cefalopelvica</label>
                                <div>
                                    <select class="form-control" name="vagina_desproporcion_cefalopelvica" id="vagina_desproporcion_cefalopelvica_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Estrecho Superior">Estrecho Superior</option>
                                        <option value="Inferior">Inferior</option>
                                        <option value="Medio">Medio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Miembros Inferiores Edema</label>
                                <div>
                                    <select class="form-control" name="vagina_miembros_inferiores_edema" id="vagina_miembros_inferiores_edema_prenatal" data-target='vagina_miembros_inferiores_edema_si_form'>
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_miembros_inferiores_edema_si_form" style="display: none">
                                <label>Miembros Inferiores Edema Cual</label>
                                <div>
                                    <select class="form-control" name="vagina_miembros_inferiores_edema_si" id="vagina_miembros_inferiores_edema_si_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="+">+</option>
                                        <option value="++">++</option>
                                        <option value="+++">+++</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Neurológico Conservado</label>
                                <div>
                                    <select class="form-control" name="vagina_ceurologico_conservado" id="vagina_ceurologico_conservado_prenatal" data-target='vagina_ceurologico_conservado_si_form'>
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_ceurologico_conservado_si_form" style="display: none">
                                <label>Alteracion</label>
                                <div>
                                   <input class="form-control" type="text" name="vagina_ceurologico_conservado_si" id="vagina_ceurologico_conservado_si">
                                </div>
                            </div>
                       </div>

                    </div>
                   <p>Examen de laboratorio</p>
                   <div class="form-group">
                        <div class="col-sm-3">
                            <label>Porta Resultados</label>
                            <div>
                                <select name="porta_examen" id="porta_examen_prenatal" class="form-control">
                                    <option value="">Seleccione Uno</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Leucocitos xmm3</label>
                            <div>
                               <input type="text" class="form-control" name="leocitos" id="leocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Segmentos %</label>
                            <div>
                               <input type="text" class="form-control" name="segmentos" id="segmentos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Linfocitos %</label>
                            <div>
                               <input type="text" class="form-control" name="linfocitos" id="linfocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Hemoglobina gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="hemoglobina" id="hemoglobina_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Hematocrito %</label>
                            <div>
                               <input type="text" class="form-control" name="hematocrito" id="hematocrito_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Eosinofilos</label>
                            <div>
                               <input type="text" class="form-control" name="eosinofilos" id="eosinofilos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Resticulocitos</label>
                            <div>
                               <input type="text" class="form-control" name="resticulocitos" id="resticulocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Glicemia gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="glicemia" id="glicemia_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Glicemia gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="glicemia" id="glicemia_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>1 Hr Pospandrial gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="pospandrial_una" id="pospandrial_una_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>2 Hr Pospandrial gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="pospandrial_dos" id="pospandrial_dos_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Creatinina</label>
                            <div>
                               <input type="text" class="form-control" name="creatinina" id="creatinina_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>EGO Leucocitos</label>
                            <div>
                               <input type="text" class="form-control" name="ego_leucocitos" id="ego_leucocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Nitritos</label>
                            <div>
                               <input type="text" class="form-control" name="nitritos" id="nitritos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Glucosa</label>
                            <div>
                               <input type="text" class="form-control" name="glucosa" id="glucosa_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Proteinas</label>
                            <div>
                               <input type="text" class="form-control" name="proteinas" id="proteinas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Cilindros</label>
                            <div>
                               <input type="text" class="form-control" name="cilindros" id="cilindros_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Papanocloau</label>
                            <div>
                               <select class="form-control" name="papanocloau" id="papanocloau_renatal" data-target='papanocloau_si_form'>
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3 papanocloau_si_form" style="display: none">
                            <label>Fecha Papanocloau</label>
                            <div>
                               <input type="date" class="form-control" name="fecha_papanocloau" id="fecha_papanocloau_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3 papanocloau_si_form" style="display: none">
                            <label>Resultado Papanocloau</label>
                            <div>
                               <input type="text" class="form-control" name="resultado_papanocloau" id="resultado_papanocloau_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Cultivos Vaginales</label>
                            <div>
                               <input type="text" class="form-control" name="cultivos_vaginales" id="cultivos_vaginales_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>RPR</label>
                            <div>
                                <select class="form-control" name="rpr_positivo" id="rpr_positivo_prenatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Negativo">Negativo</option>
                                   <option value="Positivo">Positivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>VIH</label>
                            <div>
                                <select class="form-control" name="vih_positivo" id="vih_positivo_prenatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Negativo">Negativo</option>
                                   <option value="Positivo">Positivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Urocultivo</label>
                            <div>
                               <select class="form-control" name="Urocultivo" id="Urocultivo_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Sin Crecimiento Bacteriano">Sin Crecimiento Bacteriano</option>
                                   <option value="Con Crecimiento Bacteriano">Con Crecimiento Bacteriano</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Transaminasas</label>
                            <div>
                               <input type="text" class="form-control" name="transaminasas" id="transaminasas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Billiruinas</label>
                            <div>
                               <input type="text" class="form-control" name="billiruinas" id="billiruinas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>LDH</label>
                            <div>
                               <input type="text" class="form-control" name="ldh" id="ldh_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>TP</label>
                            <div>
                               <input type="text" class="form-control" name="tp" id="tp_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>TPT</label>
                            <div>
                               <input type="text" class="form-control" name="tpt" id="tpt_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Fibrinogeno</label>
                            <div>
                               <input type="text" class="form-control" name="fibrinogeno" id="fibrinogeno_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Acido Urico</label>
                            <div>
                               <input type="text" class="form-control" name="acido_urico" id="acido_urico_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Ultrasonido</label>
                            <div>
                               <select class="form-control" name="ultrasonido" id="ultrasonido_renatal" data-target='ultrasonido_si_form'>
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-9 ultrasonido_si_form" style="display: none">
                            <label>Ultrasonido Descripcion</label>
                            <div>
                                <textarea class="form-control" name="ultrasonido_si" id="ultrasonido_si_prenatal"></textarea>
                            </div>
                        </div>
                    </div>
                    <p>Edad Gestional</p>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Semanas</label>
                            <div>
                               <input type="number" class="form-control" name="edad_gestional_semanas" id="edad_gestional_semanas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Dias</label>
                            <div>
                               <input type="number" class="form-control" name="edad_gestional_dias" id="edad_gestional_dias_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>ILA</label>
                            <div>
                               <input type="number" class="form-control" name="ila" id="ila_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Placenta Grado</label>
                            <div>
                               <select class="form-control" name="planceta_grado" id="planceta_grado_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Doppler Normal</label>
                            <div>
                               <select class="form-control" name="doppler_normal" id="doppler_normal_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Incremento de Peso Materno</label>
                            <div>
                               <select class="form-control" name="incremento_peso_materno" id="incremento_peso_materno_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Adecuado">Adecuado</option>
                                   <option value="No Adecuado">No Adecuado</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Incremento de Curva Fetal</label>
                            <div>
                               <select class="form-control" name="incremento_curva_fetal" id="incremento_curva_fetal_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Adecuado">Adecuado</option>
                                   <option value="No Adecuado">No Adecuado</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Maduración Pulmonar</label>
                            <div>
                               <select class="form-control" name="maduracion_pulmonar" id="maduracion_pulmonar_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Semanas</label>
                            <div>
                               <input type="number" class="form-control" name="maduracion_pulmonal_semanas" id="maduracion_pulmonal_semanas_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <div class="col-sm-12">
                            <label>Comentarios</label>
                            <div>
                               <textarea class="form-control" name="comentario" id="comentario_prenatal"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Plan Medico</label>
                            <div>
                                <select class="form-control selectpicker" name="plan_medico[]" id="plan_medico_prenatal" data-live-search="true" data-size="10" multiple >
                                    <option value="Dieta rica en Proteinas y fibra">Dieta rica en Proteinas y fibra</option>
                                    <option value="Vacuna DT. Dosis 0.5 ml">Vacuna DT. Dosis 0.5 ml</option>
                                    <option value="Betametasona 12mg Intramuscular cada 24 horas por 2 dosis">Betametasona 12mg Intramuscular cada 24 horas por 2 dosis</option>
                                    <option value="Dexametasona 12mg Intramuscular STAT dosis unica">Dexametasona 12mg Intramuscular STAT dosis unica</option>
                                    <option value="Enantyum sobre liquido. 1 sobre oral cada 8 hrs por 5 dias">Enantyum sobre liquido. 1 sobre oral cada 8 hrs por 5 dias</option>
                                    <option value="Fixim Tableta 400mga 1tab oral diario por 7 dias">Fixim Tableta 400mga 1tab oral diario por 7 dias</option>
                                    <option value="Dimenhidrinato ampolla 50mg 1 ampolla Intramuscular cada 8 horas">Dimenhidrinato ampolla 50mg 1 ampolla Intramuscular cada 8 horas</option>
                                    <option value="Fluconazol 150mg 1 capsula oral semanal por 4 semanas">Fluconazol 150mg 1 capsula oral semanal por 4 semanas</option>
                                    <option value="Doxiciclina 100mg 1 tableta cada 12 horas por 10 dias">Doxiciclina 100mg 1 tableta cada 12 horas por 10 dias</option>
                                    <option value="Ciprofloxacina 500 mg 1tableta oral cada 6 horas por 7 dias">Ciprofloxacina 500 mg 1tableta oral cada 6 horas por 7 dias</option>
                                    <option value="Dicloxacilina 500mg 1tableta oral cada 8 8 horas por 7 dias">Dicloxacilina 500mg 1tableta oral cada 8 8 horas por 7 dias</option>
                                    <option value="Clindaminica 300mg 1 tableta oral cada 8 horas por 7 dias">Clindaminica 300mg 1 tableta oral cada 8 horas por 7 dias</option>
                                    <option value="Progestin Depot 250 mg 1 ampolla Intramuscular  STAT y luego semanal por 2 semanas">Progestin Depot 250 mg 1 ampolla Intramuscular  STAT y luego semanal por 2 semanas</option>
                                    <option value="Progestin 100mg 1 ampolla Intramuscular STAT y luego semanal por 2 semanas">Progestin 100mg 1 ampolla Intramuscular STAT y luego semanal por 2 semanas</option>
                                    <option value="Gesemet 1 tableta oral cada 8 horas">Gesemet 1 tableta oral cada 8 horas</option>
                                    <option value="Azitroaminica 500mg 1 tableta oral diario por 5 dias">Azitroaminica 500mg 1 tableta oral diario por 5 dias</option>
                                    <option value="Albendazol 400mg 1 tableta oral dosis unica">Albendazol 400mg 1 tableta oral dosis unica</option>
                                    <option value="Acido Folico 5 mg 1 tableta diario 9 de la noche oral todo el embarazo">Acido Folico 5 mg 1 tableta diario 9 de la noche oral todo el embarazo</option>
                                    <option value="Aspirina 100 mg 1 tableta diario 9 de la noche oral">Aspirina 100 mg 1 tableta diario 9 de la noche oral</option>
                                    <option value="Aspartato de arginina 1 vial diario oral 9 de la noche">Aspartato de arginina 1 vial diario oral 9 de la noche</option>
                                    <option value="Multivitaminas prenatal 1 tableta diario oral">Multivitaminas prenatal 1 tableta diario oral</option>
                                    <option value="Dimenhidrinato tableta de 50 mg oral. 1 tableta cada 8 horas por 5 dias">Dimenhidrinato tableta de 50 mg oral. 1 tableta cada 8 horas por 5 dias</option>
                                    <option value="Nitrofurantoina 100 mg 1 tableta cada 12 horas por 10 dias">Nitrofurantoina 100 mg 1 tableta cada 12 horas por 10 dias</option>
                                    <option value="Spasmo urolong 1 tableta oral cada 12 horas por 7 dias">Spasmo urolong 1 tableta oral cada 12 horas por 7 dias</option>
                                    <option value="Cetriler 1 tableta cada 12 horas por 5 dias">Cetriler 1 tableta cada 12 horas por 5 dias</option>
                                    <option value="Progesterona 200 mg vaginal. 9 de la noche. 1 ovulo diario">Progesterona 200 mg vaginal. 9 de la noche. 1 ovulo diario</option>
                                    <option value="Progesterona 200 mg oral. 9 d ela noche. 1 capsula diario">Progesterona 200 mg oral. 9 d ela noche. 1 capsula diario</option>
                                    <option value="Indometacina 100 mg diario supositorio (rectal) antes de dormir por 10 dias">Indometacina 100 mg diario supositorio (rectal) antes de dormir por 10 dias</option>
                                    <option value="Ketorolac 60 mg intravenoso 1 ampolla cada 8 horas">Ketorolac 60 mg intravenoso 1 ampolla cada 8 horas</option>
                                    <option value="Clindamicina 100 mg ovulos. 1 diario via vaginal por 7 dias">Clindamicina 100 mg ovulos. 1 diario via vaginal por 7 dias</option>
                                    <option value="Clindamicina 100 mg ovulo. Via vaginal Lunes y viernes">Clindamicina 100 mg ovulo. Via vaginal Lunes y viernes</option>
                                    <option value="Anara 1 tableta oral cada 8 horas">Anara 1 tableta oral cada 8 horas</option>
                                    <option value="Aceite mineral 1 cucharada (10 ml) cada 8 horas por 3 dias">Aceite mineral 1 cucharada (10 ml) cada 8 horas por 3 dias</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Examenes de Laboratorio</label>
                            <div>
                                <select class="form-control selectpicker" name="examen_laboratorio[]" id="examen_laboratorio_prenatal" data-live-search="true" data-size="10" multiple>
                                    <option value="BHC">BHC</option>
                                    <option value="Urocultivo">Urocultivo</option>
                                    <option value="TGO">TGO</option>
                                    <option value="TGP">TGP</option>
                                    <option value="LDH">LDH</option>
                                    <option value="Creatinina">Creatinina</option>
                                    <option value="TP">TP</option>
                                    <option value="TPT">TPT</option>
                                    <option value="Fibrinogeno">Fibrinogeno</option>
                                    <option value="Acido Urico">Acido Urico</option>
                                    <option value="Tipo y RH">Tipo y RH</option>
                                    <option value="Glucosa en ayuno">Glucosa en ayuno</option>
                                    <option value="Glucosa 1hr pospandrial">Glucosa 1hr pospandrial</option>
                                    <option value="Creatinina">Creatinina</option>
                                    <option value="Curva de Tolerancia oral a la Glucosa 75 gramos. Ayuno, 1 hora y 2 horas pospandrial">Curva de Tolerancia oral a la Glucosa 75 gramos. Ayuno, 1 hora y 2 horas pospandrial</option>
                                    <option value="RPR">RPR</option>
                                    <option value="VIH">VIH</option>
                                    <option value="Progesterona">Progesterona</option>
                                    <option value="Estrogeno">Estrogeno</option>
                                    <option value="Procalcitonina">Procalcitonina</option>
                                    <option value="CA 125">CA 125</option>
                                    <option value="TSH">TSH</option>
                                    <option value="T4">T4</option>
                                    <option value="T3">T3</option>
                                    <option value="T4 Libre">T4 Libre</option>
                                    <option value="Alfafetoproteina">Alfafetoproteina</option>
                                    <option value="CA 119">CA 119</option>
                                    <option value="FSH">FSH</option>
                                    <option value="LH">LH</option>
                                    <option value="Estradiol">Estradiol</option>
                                    <option value="Protenias en orina de 24hr">Protenias en orina de 24hr</option>
                                    <option value="HCG subunidad Beta">HCG subunidad Beta</option>
                                    <option value="Combs indirecto ">Combs indirecto </option>
                                    <option value="Perfil TORCH">Perfil TORCH</option>
                                    <option value="Test de avidez IgG para Toxoplasmosis">Test de avidez IgG para Toxoplasmosis</option>
                                    <option value="Toxoplasmosis Ig G Ig M">Toxoplasmosis Ig G Ig M</option>
                                    <option value="Anticardiolipina">Anticardiolipina</option>
                                    <option value="B-2 glicoproteina">B-2 glicoproteina</option>
                                    <option value="Anti DNA">Anti DNA</option>
                                    <option value="Bilirrubinas totales y fraccionadas">Bilirrubinas totales y fraccionadas</option>
                                    <option value="Anti SM">Anti SM</option>
                                    <option value="Anti RO">Anti RO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>