 <!-- Modal -->
 <div class="modal fade" id="newMenu" role="dialog" aria-hidden="true">
     <div class="modal-dialog sliderDiv" role="document">
         <div class="modal-content p-md-5 p-3">
             <form method="POST" action="{{ route('crear_menu', $restaurante->id) }}" enctype="multipart/form-data">
                 @csrf
                 <div class="row m-0">
                     <div class="col-12 p-0 pb-3 mb-3 border-bottom">
                         <h1 class="mb-0 text-center">
                             Añadir un nuevo menú
                         </h1>
                     </div>
                     <div class="col-md-3 pr-md-4 px-0">
                         <div class="row m-0">
                             <div class="col-12 bg-light shadow-sm mb-3 rounded  p-3 mb-2" style="font-size: 12px">
                                 Una vez le des a añadir menú se generará un <b>código QR</b> que al ser escaneado
                                 descargará tu menú automáticamente.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 px-4 pb-4 bg-light shadow-sm">
                         <div class="row m-0">
                             <div class="col-12 rounded  p-0 mb-2 mb-md-0 text-center">
                                 <div class="box text-center">
                                     <input type="file" name="archivo" id="file-7" required
                                         class="inputfile inputfile-5" accept="application/pdf, image/*" />
                                     <!--
                                            Con este label se pone el nombre del archivo que hemos seleccionado debajo de la imagen
                                         -->
                                     <label for="file-7">
                                         <figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                                                 viewBox="0 0 20 17">
                                                 <path
                                                     d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                             </svg></figure> <span></span>
                                     </label>
                                 </div>
                             </div>
                             <div class="col-md-12  rounded  p-0 mb-2 mb-md-0 ">
                                 <input type="text" name="nombre" required placeholder="Nombre del menú"
                                     class="form-control py-3 h-100">
                             </div>
                             <div class="col-12 rounded p-0 mt-3 text-center">
                                 <button class="btn btn-sm  btn-primary py-3 px-4" style="border-radius: 30px"
                                     type="submit">Añadir menú</button>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3 pl-md-4 px-0">
                         <div class="row m-0">
                             <div class="col-12 bg-light shadow-sm mb-3 rounded  p-3 mt-md-0 mt-3"
                                 style="font-size: 12px">
                                 Pulsa encima para añadir una imágen o un pdf donde se muestre bien tu menú.
                             </div>
                         </div>
                     </div>
                 </div>
             </form>

         </div>
     </div>
 </div>
 <!-- end Modal -->
