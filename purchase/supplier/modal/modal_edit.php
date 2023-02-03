<div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_edit" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header bg-gradient-secondary">
                <h5 class="modal-title">แก้ไขผู้ขาย</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="frmEditSupplier" id="frmEditSupplier" method="POST" style="padding:10px;"
                action="javascript:void(0);">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">รหัสผู้ขาย</label>
                            <input type="text" class="form-control" name="supcode" id="supcode" minlength="4"
                                maxlength="4" required>
                        </div>

                        <div class="form-group col-md-9">
                            <label for="recipient-name" class="col-form-label">ชื่อผู้ขาย</label>
                            <input type="text" class="form-control" name="supname" id="supname" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">เลขที่</label>
                            <input type="text" class="form-control" name="idno" id="idno">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">ถนน</label>
                            <input type="text" class="form-control" name="road" id="road">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">ตำบล</label>
                            <input type="text" class="form-control" name="subdistrict" id="subdistrict">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">อำเภอ</label>
                            <input type="text" class="form-control" name="district" id="district">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">จังหวัด</label>
                            <select class="form-control" name="province" id="province">
                                <?php getProvince();?>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" name="zipcode" id="zipcode">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="tel" id="tel">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">เบอร์แฟ็ค</label>
                            <input type="text" class="form-control" name="fax" id="fax">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">เลขผู้เสียภาษี</label>
                            <input type="text" class="form-control" name="taxnumber" id="taxnumber">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group col-lg-3 col-6">
                            <label for="recipient-name" class="col-form-label">สถานะการใช้งาน</label>
                            <select class="form-control" name="status" id="status">
                                <option value="Y">เปิดการใช้งาน</option>
                                <option value="N">ปิดการใช้งาน</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="code" name="code">
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" id="frmEditSupplier" form="frmEditSupplier" class="btn btn-primary">แก้ไข</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>