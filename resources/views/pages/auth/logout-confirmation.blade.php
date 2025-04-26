<div class="modal fade" id="modal-delete-logout">
  <div class="modal-dialog">
      <form action="/logout" method="POST">
          @csrf
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Konfirmasi Logout</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p>Apakah anda yakin ingin keluar dari aplikasi?</p>
              </div>
              <div class="modal-footer justify-content-between">
                  <button type="submit" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-outline-danger">Logout</button>
              </div>
          </div>
      </form>
      <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
