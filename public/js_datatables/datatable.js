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
                name:'usr_name', 
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
                name:'usr_name', 
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

function position_type() {
    $('#example').DataTable({
      processing: true,
      search: false,
      serverSide: true,
      ajax: 'position-type',
      lengthChange: false,
      dom: 'Blfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
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
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
        columns: [
            {
                data: 'mjr_id',
                name: 'mjr_id',
                class: 'table-fit text-left',
                orderable:true,
                searchable: true,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'mjr_name', 
                name:'mjr_name', 
                orderable: true, 
                searchable: true
            },
            {
                data: 'mjr_is_active', 
                name:'mjr_is_active', 
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
            "zeroRecords": "Daftar Jurusan tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar jurusan",
            "infoFiltered": "(pencarian dari _MAX_ daftar jurusan)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}

function landingPage() {
    $('#example').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'landing-page',
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
                data: 'mss_description', 
                name: 'mss_description', 
                orderable: false, 
                searchable: true
            },
             {
                data: 'mss_file', 
                name: 'mss_file', 
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
            "zeroRecords": "Daftar Halaman Arahan tidak tersedia",
            "info": "Halaman _PAGE_ dari _PAGES_ Lainya",
            "infoEmpty": "Tidak ada daftar halaman arahan",
            "infoFiltered": "(pencarian dari _MAX_ daftar halaman arahan)",
            "paginate": {
                "previous": "sebelumnya",
                "next": "selanjutnya"
            }
        }
    });
}