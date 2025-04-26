<div class="modal fade" id="modal-delete-{{ $product->id }}">
    <div class="modal-dialog">
        <form action="/barang-keluar/{{ $product->id }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Hapus Barang Keluar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin untuk menghapus barang ini?</p>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-outline-danger">Hapus</button>
              </div>
            </div>
        </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>