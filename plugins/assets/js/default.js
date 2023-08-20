$(document).ready(function(){
    //add & remuve class
    //........................
    $(document).on('click', 'ul li a', function(){
        $('ul li a').removeClass('active')
        $(this).addClass('active')
    });

    $(document).on('click', 'nav#navScd a', function(){
        $(this).addClass('active').siblings().removeClass('active')
    });

    //NAVBAR HOME
    //........................
    $(window).scroll( function() {
        var wScroll = $(this).scrollTop();

        if (wScroll > '650') {
            $('#navScroll').addClass('bg-warning');
            $('#navScroll').removeClass('navbar-dark');
            $('#navScroll .nav-link').removeClass('text-white');
            $('#navScroll').addClass('navbar-light');

            $('#navScroll2').addClass('bg-warning');
            $('#navScroll2').removeClass('navbar-dark');
            $('#navScroll .nav-link').removeClass('text-white');
            $('#navScroll2').addClass('navbar-light');
        } else {
            $('#navScroll').removeClass('bg-warning');
            $('#navScroll').addClass('navbar-dark');
            $('#navScroll .nav-link').addClass('text-white');
            $('#navScroll').removeClass('navbar-light');

            $('#navScroll2').removeClass('bg-warning');
            $('#navScroll2').addClass('navbar-dark');
            $('#navScroll .nav-link').addClass('text-white');
            $('#navScroll2').removeClass('navbar-light');
        }
    });

    //NAVBAR SCD ADMIN
    //........................
    $('#database').on('click', function() {
        $('#navScd').html(database());
    });

    $('#profil').on('click', function() {
        $('#navScd').html(profil());
    });

    $('#ipmers').on('click', function() {
        $('#navScd').html(ipmers());
    });

    $('#lembaga').on('click', function() {
        $('#navScd').html(lembaga());
    });

    $('#direktori').on('click', function() {
        $('#navScd').html(direktori());
    });
        
    $('#setting').on('click', function() {
        $('#navScd').html(setting());
    });

    
    //Body Admin
    //........................
    
    //AJAX HTML
    function ajaxHtml(a,b) {
        $.ajax({
            url: "../plugins/configurasi/functionHtml.php?h2="+b,
            type: 'post',
            data: a,
            beforeSend:function(){
                $('#mainAdmin').html('<div class="align-middle text-center mt-5 "><img src="../plugins/assets/images/loading.gif"> </div>')
            },
    
            success: function(result) {
                $('#mainAdmin').html(result);

                // CK Editor
                if (a == 'addArtikel') { //khusus untuk menampilkan CK EDITOR
                    ClassicEditor.create(document.getElementById('a'));
                }else if (a == 'kaderTM1'){ //Khusus untuk edit data kader TM 1
                    const aBtn = document.querySelectorAll('table a.btn-edit'); console.log(aBtn);
                    aBtn.forEach( function(el){
                        el.addEventListener('click', function(e){
                            const a = e.target.title; console.log(a);
                            ajaxHtml('editKaderTM1', a);
                        })
                    })
                }
            }
        });
    }

    //Database Ketums
    $(document).on('click', '#ketums', function(){
        ajaxHtml('ketums');
    });
    
    $(document).on('click', '#struktur', function(){
        ajaxHtml('struktur');
    });
    
    //Input Ketums
    $(document).on('click', '#inputKetums', function() {
        ajaxHtml('inputKetums');
    });

    //Input STRUKTUR
    $(document).on('click', '#inputStruktur', function() {
        ajaxHtml('inputStruktur');
    });

    //Tabel Artikel IPM 
    $(document).on('click', '#ipmers-1', function() {
        ajaxHtml('ipmers-1','Tabel Artikel IPM News');
    });
    $(document).on('click', '#ipmers-2', function() {
        ajaxHtml('ipmers-2','Tabel Artikel Opini Pelajar');
    });
    $(document).on('click', '#ipmers-3', function() {
        ajaxHtml('ipmers-3','Tabel Artikel IPMers Work');
    });

    //Input texarea Artikel IPM 
    $(document).on('click', '#addArtikel', function() {
        ajaxHtml('addArtikel');
    });

    //Database Admin Web
    $(document).on('click', '#admin-web', function() {
        ajaxHtml('admin-web');
    });

    //Input Admin Web
    $(document).on('click', '#inputAdminWeb', function() {
        ajaxHtml('inputAdminWeb');
    });

    //Database Kader TM 1
    $(document).on('click', '#kaderTM1', function() {
        ajaxHtml('kaderTM1'); 
        // const aBtn = document.querySelectorAll('table a.btn-edit'); console.log(aBtn);
    });

    //Input Kader TM 1
    $(document).on('click', '#inputKaderTM1', function() {
        ajaxHtml('inputKaderTM1');
    });

    //---------------------------------------------------------------------------//

    //Upload Foto
    $(document).on('change', '#file1', function(){
        var name = document.getElementById("file1").files[0].name;
        var idKirim = document.getElementById("idKirim").innerText;
        var nama = document.getElementById("nama").value;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
console.log(nama);

        if (nama === '') {
            alert('Isiki dulu forms sebelumnya !');
            return false;
        }
  
        if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1){
           alert("Format gambar tidak sesusai");
           return false;
        }
  
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file1").files[0]);
        var f = document.getElementById("file1").files[0];
        var fsize = f.size||f.fileSize;
  
        if(fsize > 500000) {
           alert("Ukuran maksimal file 500 KB");
        }else{
           form_data.append("file", document.getElementById('file1').files[0]);
  
           $.ajax({
              url:"../plugins/configurasi/prosesAdmin.php?nama="+nama+"&idKirim="+idKirim,
              method:"POST",
              data: form_data,
              contentType: false,
              cache: false,
              processData: false,
              beforeSend:function(){
                 $('#uploaded_image1').html("<label class='text-success'>Sedang Mengupload Gambar...</label>");
              },
              success:function(data){
                 $('#uploaded_image1').html(data);
              }
           });
        }
     });

     // VALIDASI Form tambah Mahasiswa dan Alumni
    $(document).on('click', '.tambah', function(){

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
    
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
    
            form.classList.add('was-validated')
            }, false)
        })
    });
});

/* globals Chart:false, feather:false */
(function () {
    'use strict'
    feather.replace()
})();




