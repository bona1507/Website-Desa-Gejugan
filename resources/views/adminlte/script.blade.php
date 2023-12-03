<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script>
    $(document).ready(function() {
        $('.filter-btn').on('click', function() {
            var status = $(this).data('status');
            $('.data-row').hide();
            $('.data-row[data-status="' + status + '"]').show();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Menangkap klik tombol "Proses"
        var prosesBtns = document.querySelectorAll('.proses-btn');
        prosesBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var fileId = this.getAttribute('data-file-id');
                updateStatus(fileId);
            });
        });

        // Fungsi untuk memperbarui status melalui permintaan AJAX
        function updateStatus(fileId) {
            // Mengirim permintaan AJAX ke endpoint yang sesuai dengan framework Anda
            fetch('/update-status/{id}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        file_id: fileId,
                        status: 1
                    })
                })
                .then(function(response) {
                    if (response.ok) {
                        // Sukses mengubah status, lakukan tindakan yang diperlukan
                        console.log('Status updated successfully');
                        // Refresh halaman atau lakukan tindakan lain yang diinginkan
                        location.reload();
                    } else {
                        // Gagal mengubah status, lakukan penanganan kesalahan yang sesuai
                        console.error('Failed to update status');
                    }
                })
                .catch(function(error) {
                    // Kesalahan saat mengirim permintaan, lakukan penanganan kesalahan yang sesuai
                    console.error('An error occurred', error);
                });
        }
    });
</script>
<!-- Add this code at the bottom of your HTML file, before the closing </body> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  // Filter buttons click event
  $('.filter-btn').click(function() {
    var status = $(this).data('status');
    
    // Show all rows if status is 2 (All), otherwise show/hide based on the status value
    $('.list-data-umkm').each(function() {
      var dataStatus = $(this).data('status');
      
      if (status == 2 || dataStatus == status) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});
</script>

<script>
    function filterStatus(status) {
      const rows = document.querySelectorAll("#filtered-results tbody tr");
      rows.forEach((row) => {
        if (status === 'all') {
          row.style.display = 'table-row';
        } else {
          const statusCell = row.querySelector('td:nth-child(4)');
          const isStatusValidated = statusCell.textContent.trim() === 'Sudah Validasi';
          if ((status === 'validated' && isStatusValidated) || (status === 'non-validated' && !isStatusValidated)) {
            row.style.display = 'table-row';
          } else {
            row.style.display = 'none';
          }
        }
      });
    }
  </script>

<script>
    // The filterStatus function remains the same as in the previous code.
    // Ensure you've included it in your actual code.

    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("filtered-results");
      tr = table.getElementsByTagName("tr");

      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // Column index 1 is "Nomor Tiket"
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>