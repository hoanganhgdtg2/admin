    <?php //$this->load->view('admin/usergame/head', $this->data) ?>
    <!--<div class="line"></div>-->
    <?php //if ($role == false): ?>
    <!--    <div class="wrapper">-->
    <!--        <div class="widget">-->
    <!--            <div class="title">-->
    <!--                <h6>Bạn không được phân quyền</h6>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <?php //else: ?>
    <!--    <div class="wrapper">-->
    <!--        --><?php //$this->load->view('admin/message', $this->data); ?>
    <!--        -->

    <!---->
    <!--        -->
    <!--        <input type="hidden" id="listnickname" value="--><?php //echo $listnn ?><!--">-->
    <!--        <input type="hidden" id="listseri" value="--><?php //echo $listsr ?><!--">-->
    <!--        <input type="hidden" id="listpin" value="--><?php //echo $listpin ?><!--">-->
    <!---->
    <!--        <div class="widget">-->
    <!--            <div class="title">-->
    <!--                <h6>Gửi mail vinplay card</h6>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="formRow">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-sm-4"></div>-->
    <!--                    <label class="col-sm-4" style="color: red" id="errocode">--><?php //echo $error; ?>
    <!--                    </label>-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--            <form action="--><?php //echo admin_url("mail/sendmailvincard") ?><!--" id="fileinfo" name="fileinfo"-->
    <!--                  enctype="multipart/form-data" method="post">-->
    <!--                <div class="form-group">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-sm-2">-->
    <!--                        </div>-->
    <!--                        <label class="col-sm-1 control-label" for="exampleInputEmail1">Tài khoản:</label>-->
    <!---->
    <!--                        <div class="col-sm-2">-->
    <!--                            <input type="file" id="userfile" name="filexls"-->
    <!--                                   value="--><?php //echo $this->input->post('filexls') ?><!--">-->
    <!--                        </div>-->
    <!--                        <div class="col-sm-1">-->
    <!--                            <input type="submit" class="btn btn-primary pull-left button blueB" id="upload"-->
    <!--                                   value="Upload"-->
    <!--                                   name="ok">-->
    <!--                        </div>-->
    <!--                        <div class="col-sm-4">-->
    <!--                            <input type="button" value="Gửi mail" name="submit" class="button blueB" id="sendmail">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="formRow">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-sm-2"></div>-->
    <!--                        <label class="col-sm-1">-->
    <!--                            Tiêu đề:-->
    <!--                        </label>-->
    <!---->
    <!--                        <div class="col-sm-4">-->
    <!--                            <input id="txttitle" type="text" class="form-control"-->
    <!--                                   placeholder="Bạn nhập tiêu đề">-->
    <!--                        </div>-->
    <!---->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="formRow">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-sm-2"></div>-->
    <!--                        <label class="col-sm-1">-->
    <!--                            Nội dung:-->
    <!--                        </label>-->
    <!---->
    <!--                        <div class="col-sm-4">-->
    <!--                            <textarea id="content" row="100" class="form-control" style="height: 400px"-->
    <!--                                      placeholder="Bạn chỉ được nhập ký tự không dấu" maxlength="459"></textarea>-->
    <!--                        </div>-->
    <!---->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </form>-->
    <!---->
    <!---->
    <!--            <div class="formRow">-->
    <!--                <div class="row">-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="modal fade" id="bsModal3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"-->
    <!--                 aria-hidden="true">-->
    <!--                <div class="modal-dialog modal-sm">-->
    <!--                    <div class="modal-content">-->
    <!--                        <div class="modal-header">-->
    <!--                        </div>-->
    <!--                        <div class="modal-body">-->
    <!--                            <p style="color: #0000ff">Bạn gửi mail thành công</p>-->
    <!--                        </div>-->
    <!--                        <div class="modal-footer">-->
    <!--                            <input class="blueB logMeIn" type="button" value="Đóng" data-dismiss="modal"-->
    <!--                                   aria-hidden="true">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <?php //endif; ?>
    <!--<div id="spinner" class="spinner" style="display:none;">-->
    <!--    <img id="img-spinner" src="--><?php //echo public_url('admin/images/gif-load.gif') ?><!--" alt="Loading"/>-->
    <!--</div>-->
    <!--<div class="clear mt30"></div>-->
    <!--<style>-->
    <!--    .spinner {-->
    <!--        position: fixed;-->
    <!--        top: 50%;-->
    <!--        left: 50%;-->
    <!--        margin-left: -50px; /* half width of the spinner gif */-->
    <!--        margin-top: -50px; /* half height of the spinner gif */-->
    <!--        text-align: center;-->
    <!--        z-index: 1234;-->
    <!--        overflow: auto;-->
    <!--        width: 100px; /* width of the spinner gif */-->
    <!--        height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */-->
    <!--    }</style>-->
    <!--<script>-->
    <!--    $("#sendmail").click(function () {-->
    <!--        if ($("#txttitle").val() == "") {-->
    <!--            $("#errocode").html("Bạn chưa nhập tiêu đề");-->
    <!--            return false;-->
    <!--        }-->
    <!--        else if ($("#content").val() == "") {-->
    <!--            $("#errocode").html("Bạn chưa nhập nội dung");-->
    <!--            return false;-->
    <!--        }-->
    <!--        if ($("#listnickname").val() == "" || $("#listseri").val()== "" || $("#listpin").val()== "" ) {-->
    <!--            $("#errocode").html("Không tồn tại file hoặc key Nickname , Seri , Pin viết sai");-->
    <!--            return false;-->
    <!--        } else {-->
    <!--            $("#spinner").show();-->
    <!--            $.ajax({-->
    <!--                type: "POST",-->
    <!--                url: "--><?php //echo admin_url('mail/sendmailvincardajax')?>//",
    //                data: {
    //                    nickname: $("#listnickname").val(),
    //                    seri:  $("#listseri").val(),
    //                    pin:  $("#listpin").val(),
    //                    content: $("#content").val(),
    //                    title: $("#txttitle").val()
    //                },
    //                dataType: 'json',
    //                success: function (res) {
    //                    $("#spinner").hide();
    //                    console.log(res);
    //                    if (res.errorCode == 0) {
    //                        $("#bsModal3").modal("show");
    //                        $("#errocode").html("");
    //                        $("#content").val("");
    //                        $("#txttitle").val("");
    //                        if (res.nickName != "") {
    //                            $("#errocode").html("Nick name không tồn tại:" + res.nickName);
    //                        }
    //                    } else if (res.errorCode == 7006) {
    //                        $("#errocode").html("Nội dung không đúng định dạng");
    //                    }
    //
    //                    else if (res.errorCode == 7002) {
    //                        $("#errocode").html("Số lượng nickname và số lượng serial , pin không bằng nhau vui lòng upload lại file");
    //                    }
    //                    else if (res.errorCode == 7003) {
    //                        $("#errocode").html("Số lượng serial , pin và số lượng nickname không bằng nhau vui lòng upload lại file");
    //                    }
    //                    else if (res.errorCode == 7004) {
    //                        $("#errocode").html("Số lượng serial  và số lượng pin không bằng nhau vui lòng upload lại file");
    //                    }
    //                    else if (res.errorCode == 7005) {
    //                        $("#errocode").html("Số lượng pin  và số lượng serial không bằng nhau vui lòng upload lại file");
    //                    }
    //                }, error: function () {
    //                    $("#spinner").hide();
    //                    $("#errocode").html("Hệ thống gián đoan . Vui lòng liên hệ 19006896");
    //                }
    //            });
    //        }
    //
    //
    //    });
    //    $('#bsModal3').on('hidden.bs.modal', function () {
    ////        window.location.href = '<?php ////echo admin_url("mail/sendmailvincard") ?>////';
    //    });
    //</script>