<!--<div class="titleArea">-->
<!--    <div class="wrapper">-->
<!--        <div class="pageTitle">-->
<!---->
<!--        </div>-->
<!--        <div class="clear"></div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="line"></div>-->
<?php //if($role == false): ?>
<!--<div class="wrapper">-->
<!--    <div class="widget">-->
<!--        <div class="title">-->
<!--            <h6>Bạn không được phân quyền</h6>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php //else: ?>
<!--<div class="wrapper">-->
<!--    --><?php //$this->load->view('admin/message', $this->data); ?>
<!--    -->
<!--    <link rel="stylesheet" href="--><?php //echo public_url() ?><!--/site/bootstrap/bootstrap-datetimepicker.css">-->

<!--    -->
<!--    <script src="--><?php //echo public_url() ?><!--/site/bootstrap/moment.js"></script>-->

<!--    <script src="--><?php //echo public_url() ?><!--/site/bootstrap/bootstrap-datetimepicker.min.js"></script>-->
<!--    <div class="widget">-->
<!--        <h4 id="resultsearch" style="color: #e72929;margin-left: 10px"></h4>-->
<!--        <div class="title">-->
<!--            <h6>Lịch sử chuyển khoản MoMo</h6>-->
<!--        </div>-->
<!--        <form class="list_filter form" action="--><?php //echo admin_url('report/cashoutbymomo') ?><!--" method="post">-->
<!--            <div class="formRow">-->
<!--                <table>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <label for="param_name" class="formLeft" id="nameuser"-->
<!--                                style="margin-left: 50px;margin-bottom:-2px;width: 100px">Từ ngày:</label></td>-->
<!--                        <td class="item">-->
<!--                            <div class="input-group date" id="datetimepicker1">-->
<!--                                <input type="text" id="toDate" name="toDate" value="--><?php //echo $start_time ?><!--"> <span-->
<!--                                    class="input-group-addon">-->
<!--                                    <span class="glyphicon glyphicon-calendar"></span>-->
<!--                                </span>-->
<!--                            </div>-->
<!---->
<!---->
<!--                        </td>-->
<!---->
<!--                        <td>-->
<!--                            <label for="param_name" style="margin-left: 20px;width: 100px;margin-bottom:-3px;"-->
<!--                                class="formLeft"> Đến ngày: </label>-->
<!--                        </td>-->
<!--                        <td class="item">-->
<!---->
<!--                            <div class="input-group date" id="datetimepicker2">-->
<!--                                <input type="text" id="fromDate" name="fromDate" value="--><?php //echo $end_time ?><!--"> <span-->
<!--                                    class="input-group-addon">-->
<!--                                    <span class="glyphicon glyphicon-calendar"></span>-->
<!--                                </span>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="formRow">-->
<!--                <table>-->
<!--                    <tr>-->
<!--                        <td><label style="margin-left: 50px;margin-bottom:-2px;width: 100px">Trạng thái:</label></td>-->
<!--                        <td class="">-->
<!--                            <select id="select_status" name="select_status"-->
<!--                                style="margin-left: 0px;margin-bottom:-2px;width: 143px">-->
<!--                                <option value="">Chọn</option>-->
<!--                                <option value="success"-->
<!--                                    --><?php //if($this->input->post('select_status') == "success" ){echo "selected";} ?><!-->Thành công</option>-->
<!--                                <option value="pending"-->
<!--                                    --><?php //if($this->input->post('select_status') == "pending" ){echo "selected";} ?><!-->Đang xử lý</option>-->
<!--                                <option value="error"-->
<!--                                    --><?php //if($this->input->post('select_status') == "error" ){echo "selected";} ?><!-->Rút tiền thất bại</option>-->
<!--                                <option value="reject"-->
<!--                                    --><?php //if($this->input->post('select_status') == "reject" ){echo "selected";} ?><!-->Từ chối</option>-->
<!--                                -->
<!--                            </select>-->
<!--                        </td>-->
<!--                        -->
<!--                    </tr>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="formRow">-->
<!---->
<!--                <table>-->
<!--                    <tr>-->
<!--                        <td><label style="margin-left: 30px;margin-bottom:-2px;width: 100px">Nick name:</label></td>-->
<!--                        -->
<!--                        <td><input type="text" style="margin-left: 20px;margin-bottom:-2px;width: 150px"-->
<!--                                id="filter_iname" value="--><?php //echo $this->input->post('name') ?><!--" name="name"></td>-->
<!--                        <td><label style="margin-left: 32px;margin-bottom:-2px;width: 100px">Mã giao dịch:</label></td>-->
<!--                        <td><input type="text" style="margin-left: 20px;margin-bottom:-2px;width: 150px" id="magiaodich"-->
<!--                                value="--><?php //echo $this->input->post('magiaodich') ?><!--" name="magiaodich"></td>-->
<!---->
<!--                        <td style="">-->
<!--                            <input type="submit" id="search_tran" value="Tìm kiếm" class="button blueB"-->
<!--                                style="margin-left: 70px">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="reset"-->
<!--                                onclick="window.location.href = '--><?php //echo admin_url('report/cashoutbymomo') ?>//'; "
//                                value="Reset" class="basic" style="margin-left: 20px">
//                        </td>
//                    </tr>
//
//                </table>
//
//            </div>
//        </form>
//        <div class="formRow">
//            <div class="row">
//                <div class="col-sm-2">
//                    <h5>Tổng:<span style="color: #7a6fbe" id="summoney"></span></h5>
//                </div>
//                <div class="col-sm-8">
//                </div>
//                <div class="col-sm-2">
//                    <h5>Tổng giao dịch:<span style="color: #7a6fbe" id="sumrecord"></span></h5>
//                </div>
//            </div>
//        </div>
//        <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
//            <thead>
//                <tr style="height: 20px;">
//                    <td>STT</td>
//                    <td>Mã giao dịch</td>
//                    <td>Nick name</td>
//                    <td>Số điện thoại</td>
//
//                    <td>Tiền chuyển</td>
//                    <td>Trạng thái</td>
//                    <td>Mô tả</td>
//
//                    <td>Thời gian</td>
//                    <td>Hành động</td>
//                    <td>Người Duyệt</td>
//                </tr>
//            </thead>
//            <tbody id="logaction">
//            </tbody>
//        </table>
//    </div>
//</div>
<?php //endif; ?>
<!--<style>-->
<!--td {-->
<!--    word-break: break-all;-->
<!--}-->
<!---->
<!--thead {-->
<!--    font-size: 12px;-->
<!--}-->
<!---->
<!--.spinner {-->
<!--    position: fixed;-->
<!--    top: 50%;-->
<!--    left: 50%;-->
<!--    margin-left: -50px;-->
<!--    /* half width of the spinner gif */-->
<!--    margin-top: -50px;-->
<!--    /* half height of the spinner gif */-->
<!--    text-align: center;-->
<!--    z-index: 1234;-->
<!--    overflow: auto;-->
<!--    width: 100px;-->
<!--    /* width of the spinner gif */-->
<!--    height: 102px;-->
<!--    /*hight of the spinner gif +2px to fix IE8 issue */-->
<!--}-->
<!--</style>-->
<!--<div class="container">-->
<!--    <div id="spinner" class="spinner" style="display:none;">-->
<!--        <img id="img-spinner" src="--><?php //echo public_url('admin/images/loading.gif') ?><!--" alt="Loading" />-->
<!--    </div>-->
<!--    <div class="text-center">-->
<!--        <ul id="pagination-demo" class="pagination-lg"></ul>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--<script>-->
<!--$(function() {-->
<!--    $('#datetimepicker1').datetimepicker({-->
<!--        format: 'YYYY-MM-DD HH:mm:ss'-->
<!--    });-->
<!--    $('#datetimepicker2').datetimepicker({-->
<!--        format: 'YYYY-MM-DD HH:mm:ss'-->
<!--    });-->
<!---->
<!--});-->
<!--$("#search_tran").click(function() {-->
<!--    var fromDatetime = $("#toDate").val();-->
<!--    var toDatetime = $("#fromDate").val();-->
<!--    if (fromDatetime > toDatetime) {-->
<!--        alert('Ngày kết thúc phải lớn hơn ngày bắt đầu')-->
<!--        return false;-->
<!--    }-->
<!--});-->
<!---->
<!--function resultSearchTransction(stt, rid, nickName, bank,  moneytran, status, message, strTime, userApprove) {-->
<!--    var rs = "";-->
<!--    rs += "<tr>";-->
<!--    rs += "<td>" + stt + "</td>";-->
<!--    rs += "<td>" + rid + "</td>";-->
<!--    rs += "<td>" + nickName + "</td>";-->
<!--    rs += "<td>" + bank + "</td>";-->
<!--    -->
<!--    rs += "<td>" + commaSeparateNumber(moneytran) + "</td>";-->
<!--    rs += "<td>" + status + "</td>";-->
<!--    rs += "<td>" + message + "</td>";-->
<!--    -->
<!--    rs += "<td>" + strTime + "</td>";-->
<!--    rs += "<td><a href='/admin/report/updatetransmomo?transId="+rid+"'>Cập nhật<a></td>";-->
<!--    rs += "<td>" + userApprove + "</td>"-->
<!--    rs += "</tr>";-->
<!--    return rs;-->
<!--}-->
<!--$(document).ready(function() {-->
<!--    var result = "";-->
<!--    var oldpage = 0;-->
<!--    $('#pagination-demo').css("display", "block");-->
<!--    $("#spinner").show();-->
<!--    -->
<!--    $.ajax({-->
<!--        type: "POST",-->
<!--        url: "--><?php //echo admin_url('report/cashoutbymomoajax')?>//",
//        data: {
//            nickname: $("#filter_iname").val(),
//            bank: $("#select_bank").val(),
//            status: $("#select_status").val(),
//            toDate: $("#toDate").val(),
//            fromDate: $("#fromDate").val(),
//            pages: 1,
//            tranid: $("#magiaodich").val()
//        },
//
//        dataType: 'json',
//        success: function(result) {
//            $("#spinner").hide();
//
//            if (result.ListTrans == "") {
//                $('#pagination-demo').css("display", "none");
//                $("#resultsearch").html("Không tìm thấy kết quả");
//            } else {
//                $("#resultsearch").html("");
//                var totalPage = Math.ceil( result.totalTrans/50);
//                var totalmoney = commaSeparateNumber(result.totalMoney);
//                var totalrecord = commaSeparateNumber(result.totalTrans);
//
//                $('#summoney').html(totalmoney);
//                $('#sumrecord').html(totalrecord);
//                stt = 1;
//                $.each(result.ListTrans, function(index, value) {
//                    result += resultSearchTransction(
//                                                stt, value.Id, value.Nickname, value.PhoneNumber, value.Amount, value.Status, "", value.CreatedAt, value.UserApprove
//                                            );
//                    stt++;
//                });
//                $('#logaction').html(result);
//                $('#pagination-demo').twbsPagination({
//                    totalPages: totalPage,
//                    visiblePages: 5,
//                    onPageClick: function(event, page) {
//                        if (oldpage > 0) {
//                            $("#spinner").show();
//                            $.ajax({
//                                type: "POST",
//                                url: "<?php //echo admin_url('report/cashoutbymomoajax')?>//",
//                                data: {
//                                    nickname: $("#filter_iname").val(),
//                                    bank: $("#select_bank").val(),
//                                    status: $("#select_status").val(),
//                                    toDate: $("#toDate").val(),
//                                    fromDate: $("#fromDate").val(),
//                                    pages: page,
//                                    tranid: $("#magiaodich").val()
//
//                                },
//                                dataType: 'json',
//                                success: function(result) {
//                                    $("#resultsearch").html("");
//                                    $("#spinner").hide();
//                                    stt = 1;
//                                    $.each(result.ListTrans, function(
//                                        index, value) {
//                                        result +=
//                                        resultSearchTransction(
//                                                stt, value.Id, value.Nickname, value.PhoneNumber, value.Amount, value.Status, "", value.CreatedAt, value.UserApprove
//                                            );
//                                        stt++;
//                                    });
//                                    $('#logaction').html(result);
//
//                                },
//                                error: function() {
//                                    $("#spinner").hide();
//                                    $('#logaction').html("");
//                                    $("#resultsearch").html(
//                                        "Hệ thống quá tải. Vui lòng thử lại sau!"
//                                    );
//                                },
//                                timeout: 20000
//                            });
//                        }
//                        oldpage = page;
//                    }
//                });
//            }
//
//        },
//        error: function() {
//            $("#spinner").hide();
//            $('#logaction').html("");
//            $("#resultsearch").html("Hệ thống quá tải. Vui lòng thử lại sau!");
//        },
//        timeout: 20000
//    })
//
//});
//</script>
//<script>
//function commaSeparateNumber(val) {
//    while (/(\d+)(\d{3})/.test(val.toString())) {
//        val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
//    }
//    return val;
//}
//function convertTime(time){
//    var a = new Date(time);
//    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
//    var year = a.getFullYear();
//    var month = months[a.getMonth()];
//    var date = a.getDate();
//    var hour = a.getHours();
//    var min = a.getMinutes();
//    var sec = a.getSeconds();
//    var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
//    return time;
//}
//</script>