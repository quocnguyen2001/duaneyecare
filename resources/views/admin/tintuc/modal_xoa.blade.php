<div class="modal fade" id="xoa_tin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cảnh báo</h5>
            <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <h4>Bạn có chắc chắn xóa tin <span style="color: red">{{ $tin->tieu_de }}</span> không ?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
           
            <a class="btn btn-primary" href="/admin/xoa-tin-tuc/{{ $id }}">Chắc chắn</a>
        </div>
        </div>
    </div>
    </div>