<?php
                        if (isset($_GET['success_darah']) && $_GET['success_darah'] == 1)
                        {
                             echo 
                        
                             "<script>
                             Swal.fire({
                                 title: '<strong>Data Berhasil Diubah</strong>',
                                             icon: 'success',
                                             title: 'Berhasil membuat master darah baru : <br><b>".$_SESSION['nama_darah_endemi']."</b>'
                               });
                             </script>";

                        }else if(isset($_GET['success_habitat']) && $_GET['success_habitat'] == 1){
                            echo 
                        
                             "<script>
                             Swal.fire({
                                 title: '<strong>Data Berhasil Diinput</strong>',
                                             icon: 'success',
                                             title: 'Berhasil membuat master habitat baru :  <br><b>".$_SESSION['nama_habitat']."</b>'
                               });
                             </script>";

                        }else if(isset($_GET['success_jkucing']) && $_GET['success_jkucing'] == 1){
                            echo 
                        
                             "<script>
                             Swal.fire({
                                 title: '<strong>Data Berhasil Diinput</strong>',
                                             icon: 'success',
                                             title: 'Berhasil membuat master jenis kucing baru :  <br><b>".$_SESSION['jenis_kucing']."</b>'
                               });
                             </script>";

                        }else if(isset($_GET['success_habitat']) && $_GET['success_habitat'] == 1){
                            echo 
                        
                             "<script>
                             Swal.fire({
                                 title: '<strong>Data Berhasil Diinput</strong>',
                                             icon: 'success',
                                             title: 'Berhasil membuat master habitat baru :  <br><b>".$_SESSION['nama_habitat']."</b>'
                               });
                             </script>";

                        }else if(isset($_GET['success_jkucing']) && $_GET['success_jkucing'] == 1){
                            echo 
                        
                             "<script>
                             Swal.fire({
                                 title: '<strong>Data Berhasil Diinput</strong>',
                                             icon: 'success',
                                             title: 'Berhasil membuat master jenis kucing baru :  <br><b>".$_SESSION['jenis_kucing']."</b>'
                               });
                             </script>";

                        }else if (isset($_GET['success_edit']) && $_GET['success_edit'] == 1){
                            echo 
                       
                            "<script>
                            Swal.fire({
                                title: '<strong>Data Berhasil Diinput</strong>',
                                            icon: 'success',
                                            title: 'Data  berhasil diubah'
                              });
                            </script>";

                        }else if (isset($_GET['success_trx']) && $_GET['success_trx'] == 1){
                            echo 
                       
                            "<script>
                            Swal.fire({
                                title: '<strong>Data Berhasil Diinput</strong>',
                                            icon: 'success',
                                            title: 'Berhasil membuat trx baru :  <br><b>".$_SESSION['nama_kucing']."</b>'
                              });
                            </script>";

                       }else if(isset($_GET['success_delete']) && $_GET['success_delete'] == 1){
                            echo 
                        
                             "<script>
                             Swal.fire({
                                 title: '<strong>Data Berhasil Dihapus</strong>',
                                             icon: 'success',
                                             title: 'Data Berhasil Dihapus'
                               });
                             </script>";
                        }
                   ?>