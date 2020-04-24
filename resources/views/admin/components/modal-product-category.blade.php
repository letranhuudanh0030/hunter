<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addProductCategory" aria-hidden="true"
    id="add-product-category">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase font-weight-bold text-primary text-monospace"
                    id="addProductCategory">
                    <i class="fas fa-plus-square fa-lg mr-2"></i>Danh mục sản
                    phẩm
                </h5>
                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h5 class="text-primary text-monospace"><i class="fas fa-info-circle fa-lg mr-2"></i>Thông tin chung
                    </h5>
                    <hr>
                    <div class="form-group">
                        <label for="title">Tiêu đề: </label>
                        <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề" name="title">
                    </div>
                    <div class="form-group">
                        <label for="parent">Danh mục cha: </label>
                        <select class="form-control" id="parent" name="parent_id">
                            <option value="" selected>-- Danh mục cha --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh:</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                                <label class="custom-file-label" for="image">Chọn hình ảnh</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="intro">Mô tả ngắn: </label>
                        <textarea class="form-control" id="intro" rows="3" placeholder="Nhập mô tả ngắn" name="intro"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả: </label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Nhập mô tả" name="desc"></textarea>
                    </div>
                    <hr>
                    <h5 class="text-primary text-monospace"><i class="fab fa-adversal fa-lg mr-2"></i>SEO</h5>
                    <hr>
                    <div class="form-group">
                        <label for="">Meta title</label>
                        <input type="text" class="form-control" placeholder="Nhập meta title" name="meta_title">
                    </div>
                    <div class="form-group">
                        <label for="">Meta key</label>
                        <input type="text" class="form-control" placeholder="Nhập meta key" name="meta_key">
                    </div>
                    <div class="form-group">
                        <label for="">Meta description</label>
                        <textarea id="" rows="3" class="form-control" placeholder="Nhập meta description" name="meta_desc"></textarea>
                    </div>
                    <hr>
                    <h5 class="text-primary text-monospace"><i class="fas fa-toggle-on fa-lg mr-2"></i>Tùy chọn</h5>
                    <hr>
                    <div class="form-group d-flex">
                        <div class="custom-control custom-checkbox mr-4">
                            <input type="checkbox" class="custom-control-input" id="publish" name="options[publish]">
                            <label class="custom-control-label" for="publish">Hiển thị</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="highlight" name="options[highlight]">
                            <label class="custom-control-label" for="highlight">Nổi bật</label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-right">
                        <button class="btn btn-success px-4" type="submit" id="save">Lưu</button>
                        <button class="btn btn-secondary px-4" type="reset">Reset</button>
                        <button class="btn btn-danger px-4" type="button" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

