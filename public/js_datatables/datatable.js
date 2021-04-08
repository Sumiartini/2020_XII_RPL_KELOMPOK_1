function student() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'student',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'stu_id',
                name: 'stu_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'stu_candidate_name', 
                name:'stu_candidate_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stu_nis', 
                name:'stu_nis', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'usr_is_active', 
                name:'usr_is_active', 
                orderable: false, 
                searchable: false
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Siswa tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar Siswa",
            "infoFiltered": "(pencarian dari _MAX_ daftar Siswa)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        },
    });

    $('body').on('click', '.update_to_re_registration', function() {
            let _token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: "Siswa",
                text: 'Apakah yakin ingin mengubah status siswa ke daftar ulang?',
                icon: "warning",
                buttons: true,
                dangerMode: true,
                closeOnClickOutside: false,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'POST',
                        url: 'update/re-registration',
                        data: {
                            _token: _token
                        },
                        success: function(data) {
                            if (data.status != false) {
                                swal(data.message, {
                                    button: false,
                                    icon: "success",
                                    timer: 1000
                                });
                            } else {
                                swal(data.message, {
                                    button: false,
                                    icon: "error",
                                    timer: 1000
                                });
                            }
                            $('#example').DataTable().ajax.reload()
                        },
                        error: function(error) {
                            console.log(error)
                            swal('Tidak ada siswa yang harus daftar ulang', {
                                button: false,
                                icon: "error",
                                timer: 1000
                            });
                        }
                    });
                }
            });
        });
}

function studentUsers() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'student',
      lengthChange: true,
        columns: [
            {
                data: 'stu_id',
                name: 'stu_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'stu_candidate_name', 
                name:'stu_candidate_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stu_nis', 
                name:'stu_nis', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'usr_is_active', 
                name:'usr_is_active', 
                orderable: false, 
                searchable: false
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Siswa tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar Siswa",
            "infoFiltered": "(pencarian dari _MAX_ daftar Siswa)",
            "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}


function studentProspective() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'student/prospective',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'stu_id',
                name: 'stu_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'stu_candidate_name', 
                name:'stu_candidate_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stu_school_origin', 
                name:'stu_school_origin', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Calon siswa tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar calon siswa",
            "infoFiltered": "(pencarian dari _MAX_ daftar calon siswa)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function studentRejected() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'student/rejected',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'stu_id',
                name: 'stu_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'stu_candidate_name', 
                name:'stu_candidate_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stu_school_origin', 
                name:'stu_school_origin', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Calon siswa ditolak tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar calon siswa ditolak",
            "infoFiltered": "(pencarian dari _MAX_ daftar calon siswa)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function studentPayment() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'student/payment',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'stu_id',
                name: 'stu_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: false
            },
            {
                data: 'stp_picture', 
                name:'stp_picture', 
                render: function(data, type, full, meta){
                    return "<img src=\"" + data + "\"height=\"50\"/>";
                },
                orderable: true, 
                searchable: false
            },
            {
                data: 'stu_payment_status', 
                name:'stu_payment_status', 
                orderable: false, 
                searchable: false
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar pembayaran siswa tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar pembayaran siswa",
            "infoFiltered": "(pencarian dari _MAX_ daftar Siswa)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}



function staff() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'staff',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'stf_id',
                name: 'stf_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stf_gtk', 
                name:'stf_gtk', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'usr_is_active', 
                name:'users.usr_is_active', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Staf tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar staf",
            "infoFiltered": "(pencarian dari _MAX_ daftar staf)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}
function staffUsers() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'staff',
      lengthChange: true,
        columns: [
            {
                data: 'stf_id',
                name: 'stf_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stf_gtk', 
                name:'stf_gtk', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'usr_is_active', 
                name:'usr_is_active', 
                orderable: false, 
                searchable: false
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar staf tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar staf",
            "infoFiltered": "(pencarian dari _MAX_ daftar staf)",
            "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}


function staffProspective() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'staff/prospective',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'stf_id',
                name: 'stf_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
             {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stf_nuptk', 
                name:'stf_nuptk', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Calon staf tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar calon staf",
            "infoFiltered": "(pencarian dari _MAX_ daftar calon staf)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function staffRejected() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'staff/rejected',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'stf_id',
                name: 'stf_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
             {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'stf_nuptk', 
                name:'stf_nuptk', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Calon staf ditolak tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar calon staf ditolak",
            "infoFiltered": "(pencarian dari _MAX_ daftar calon staf)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}


function teacher() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'teacher',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'tcr_id',
                name: 'tcr_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'tcr_gtk', 
                name:'tcr_gtk', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'usr_is_active', 
                name:'usr_is_active', 
                orderable: false, 
                searchable: false
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            // "processing": '<i class="fa fa-refresh fa-spin fa-3x"></i><span class="sr-only"></span> ',
            "zeroRecords": "Daftar Guru tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar guru",
            "infoFiltered": "(pencarian dari _MAX_ daftar guru)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function teacherUsers() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'teacher',
      lengthChange: true,
        columns: [
            {
                data: 'tcr_id',
                name: 'tcr_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'tcr_gtk', 
                name:'tcr_gtk', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'usr_is_active', 
                name:'usr_is_active', 
                orderable: false, 
                searchable: false
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar guru tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar guru",
            "infoFiltered": "(pencarian dari _MAX_ daftar guru)",
            "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function teacherProspective() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'teacher/prospective',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'tcr_id',
                name: 'tcr_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
             {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'tcr_nuptk', 
                name:'tcr_nuptk', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Calon guru tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar calon guru",
            "infoFiltered": "(pencarian dari _MAX_ daftar calon guru)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function teacherRejected() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'teacher/rejected',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'tcr_id',
                name: 'tcr_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
             {
                data: 'usr_name', 
                name:'users.usr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'tcr_nuptk', 
                name:'tcr_nuptk', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Calon guru ditolak tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar calon guru ditolak",
            "infoFiltered": "(pencarian dari _MAX_ daftar calon guru)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function position_type() {
    $('#example').DataTable({
      processing: true,
      search: false,
      serverSide: true,
      ajax: 'position-type',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
      // dom: 
      //   "<'row'<'col-sm-5 text-left'B><'col-sm-5 text-center'l><'col-sm-2'f>>" +
      //   "<'row'<'col-sm-12'tr>>" +
      //   "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        columns: [
            {
                data: 'pst_id',
                name: 'pst_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'pst_name', 
                name:'pst_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'pst_honorarium', 
                name:'pst_honorarium', 
                orderable: false, 
                searchable: true
            },
            {
                data: 'pst_is_active', 
                name:'pst_is_active', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "lengthMenu": "Tampilkan _MENU_ data",
            "zeroRecords": "Daftar Jabatan tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar jabatan",
            "infoFiltered": "(pencarian dari _MAX_ daftar jabatan)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function subject() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'subject',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'sbj_id',
                name: 'sbj_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'sbj_name', 
                name:'sbj_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'sbj_is_active', 
                name:'sbj_is_active', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Mata Pelajaran tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar mata pelajaran",
            "infoFiltered": "(pencarian dari _MAX_ daftar mata pelajaran)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function school_year() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'school-year',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'scy_id',
                name: 'scy_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'scy_name', 
                name:'scy_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'scy_is_form_registration', 
                name:'scy_is_form_registration', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Tahun Ajaran tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar tahun ajaran",
            "infoFiltered": "(pencarian dari _MAX_ daftar tahun ajaran)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function major() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'major',
      lengthChange: false,
      "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
      dom: 'Blfrtip',
      // dom: 
      //   "<'row'<'col-sm-2 text-left'l><'col-sm-8 text-center'B><'col-sm-2'f>>" +
      //   "<'row'<'col-sm-12'tr>>" +
      //   "<'row'<'col-sm-5'i><'col-sm-7'p>>",
      buttons: [
            {
                extend: 'copy',
            },
            {
                extend: 'excel',
                exportOptions: {
                     columns: [0, 1, 2]
                },
            },
            {
                extend: 'pdf',
                exportOptions: {
                     columns: [0, 1, 2]
                  },
                 customize: function (doc) {
                    doc.content[1].table.widths = 
                        Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                        doc.content[1].table.widths = ['5%','45%','50%',]
                  }
            },
            {
                extend: 'print',
                exportOptions: {
                     columns: [0, 1, 2]
                  },
            },
            {
                extend: 'colvis',
            }
        ],
        columns: [
            {
                data: 'mjr_id',
                name: 'mjr_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                margin: [10, 0],
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'mjr_name', 
                name:'mjr_name', 
                orderable: true, 
                searchable: true,
                width: '*'
            },
            {
                data: 'mjr_is_active', 
                name:'mjr_is_active', 
                orderable: false, 
                searchable: false
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false,
                width: '*'
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Jurusan tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar jurusan",
            "infoFiltered": "(pencarian dari _MAX_ daftar jurusan)",
            "lengthMenu": "Tampilkan _MENU_ data",
            "buttons": {
                    "copy": "salin",
                    "excel": "excel",
                    "pdf": "pdf",
                    "print": "cetak",
                    "colvis": "visibilitas kolom",
                },
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function classes() {
$('#example').DataTable({
 searching: true,
 processing: true,
 serverSide: true,
 ajax: 'class',
 lengthChange: false,
 dom: 'Blfrtip',
 buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
   columns: [
        {
           data: 'cls_id',
           name: 'cls_id',
           class: 'table-fit text-left',
           orderable:true,
           searchable: true,
           render: function (data, type, row, meta) {
               return meta.row + meta.settings._iDisplayStart + 1;
           }
        },
        {
           data: 'cls_name',
           name:'search_cls_name',
           orderable: true,
           searchable: true
       },
       {
           data: 'scy_name',
           name:'school_years.scy_name',
           orderable: true,
           searchable: true
       },
       {
           data: 'cls_is_active',
           name:'cls_is_active',
           orderable: false,
           searchable: false
       },
       {
           data: 'action',
           name:'action',
           orderable: false,
           searchable: false
       },
   ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Kelas tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar kelas",
            "infoFiltered": "(pencarian dari _MAX_ daftar kelas)",
            "lengthMenu": "Tampilkan _MENU_ data",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function searchClasses() {

  var input, filter, table, tr, td, i, txtValue, count;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");
  count = 0;

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {        
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        count++;
      } else {
        tr[i].style.display = "none";
      }
    }
  }
  if (count == 0) {
    $('#empty').show()
  }else{
    $('#empty').hide()
  }

}

function master_slide() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'master-slide',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'mss_id',
                name: 'mss_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'mss_name', 
                name:'mss_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'mss_file', 
                name:'mss_file',
                render: function(data, type, full, meta){
                    return "<img src=\"" + data + "\"height=\"50\"/>";
                }, 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar Berkas tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar Berkas",
            "infoFiltered": "(pencarian dari _MAX_ daftar Berkas)",
            "lengthMenu": "Tampilkan _MENU_ data",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function master_config() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'master-config',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'msc_id',
                name: 'msc_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'msc_name', 
                name:'msc_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'msc_description', 
                name:'msc_description', 
                orderable: false, 
                searchable: true
            },

            {
                data: 'action', 
                name:'action', 
                orderable: false, 
                searchable: false
            },
        ],
        "language": {
            "search": "Cari:",
            "processing": "Mohon tunggu",
            "zeroRecords": "Daftar konfigurasi tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar konfigurasi",
            "infoFiltered": "(pencarian dari _MAX_ daftar konfigurasi)",
            "lengthMenu": "Tampilkan _MENU_ data",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

