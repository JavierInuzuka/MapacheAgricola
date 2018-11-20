 <body class="signup-page">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container ">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l6 offset-l3 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Registro de Clientes</span>
                                       <div class="row">
                                           <form id="form_registrar" name="form_registrar" class="col s12">
                                               <div class="col s6">
                                               <div class="input-field col s12">
                                                   <input id="rut_registrar" type="text" name="rut" class="validate">
                                                   <label for="rut_registrar">Rut</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="nombre_registrar" type="text" name="nombre" class="validate">
                                                   <label for="nombre_registrar">Nombre</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="apellido_registrar" type="text" name="apellido" class="validate">
                                                   <label for="apellido_registrar">Apellido</label>
                                               </div>
                                               </div>
                                               <div class="col s6">
                                               <div class="input-field col s12">
                                                   <input id="email_registrar" type="email" name="email" class="validate">
                                                   <label for="email_registrar">Correo</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="telefono_registrar" type="text" name="telefono" class="validate">
                                                   <label for="telefono_registrar">Telefono</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="clave_registrar" type="password" name="clave" class="validate">
                                                   <label for="clave_registrar">Contraseña</label>
                                               </div>
                                               </div>
                                               <div class="col s12">
                                               <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>Foto</span>
                                                      <input type="file" id="file_registrar" name="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text">
                                                    </div>
                                               </div>
                                               </div>    
                                               <div class="col s12 right-align m-t-sm">
                                                   <a href="<?php echo base_url();?>index" class="waves-effect waves-grey btn-flat">Iniciar Sesión</a>
                                                   <button id="bt_registrar" class="waves-effect waves-light btn teal">Registrarse</button>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>