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
        }
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
                data: 'scy_is_active', 
                name:'scy_is_active', 
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
      dom: 'Blfrtip',
      dom: 'Bfrtip',
      buttons: [
            {
                extend: 'copy',
            },
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
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
                        doc.content.splice( 1, 0, {
                        width: 125,
                        height: 125,
                        alignment: 'center',
                        image: 'data:image/png;base64,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'
                     } );
                  }
            },
            {
                extend: 'print',
                exportOptions: {
                     columns: [0, 1, 2]
                  },
                messageBottom: null,
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt')
                        .prepend(
                            '<img src="https://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
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
 searching: false,
 processing: true,
 serverSide: true,
 ajax: 'class',
 lengthChange: false,
 select: true,
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
           name:'cls_name',
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

