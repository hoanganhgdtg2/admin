<?php $this->load->view('admin/logminigame/head', $this->data) ?>
<div class="line"></div>
<div class="wrapper return-url">
    <a class="" href="<?= admin_url($uriBack) . '?' . $uri?>">
        <i class="fas fa-angle-double-left"></i> Quay lại
    </a>
</div>
<div class="wrapper">
    <div class="widget">
        <input type="hidden" id="phientx" value="<?php echo $phien; ?>">

        <div class="title">
            <h6>Chi tiết phiên tài xỉu</h6>
        </div>
        <form class="list_filter form" action="<?php echo admin_url('logminigame/detailphientaixiu/'.$phien . '/' . $uriParam) ?>" method="post">
            <div class="formRow">
                <table>
                    <tr>

                        <td><label  id = "labelvin" style="margin-bottom:-2px;width: 75px;">Nickname:</label></td>

                        <td ><input type="text" style="margin-left: 20px;margin-bottom:-2px;width: 150px"  id="name" value="<?php echo $this->input->post('name') ?>" name="name"></td>

                        <td><label style="margin-left: 50px;margin-bottom:-2px;width: 100px">Tiền:</label></td>
                        <td class="">
                            <select id="money" name="money"
                                    style="margin-bottom:-2px;width: 150px">
                                <option value="1" <?php if($this->input->post('money')== "1" ){echo "selected";} ?>>Vin</option>
                                <option value="0" <?php if($this->input->post('money')== "0" ){echo "selected";} ?> >Xu</option>
                            </select>
                        </td>
                        <td style="">
                            <input type="submit" id="search_tran" value="Tìm kiếm" class="button blueB"
                                   style="margin-left: 40px">
                        </td>
                        <td>
                            <input type="reset"
                                   onclick="window.location.href = '<?php echo admin_url('logminigame/detailphientaixiu/'.$phien . '/' . $uriParam) ?>'; "
                                   value="Reset" class="basic" style="margin-left: 20px">
                        </td>
                        <td><label style="margin-left: 100px;margin-bottom:-2px;width: 80px;">Phiên:</label></td>
                        <td><label style="margin-left: 20px;margin-bottom:-2px;width: 80px;"><?php echo $phien; ?></label></td>
                    </tr>
                </table>
            </div>
            <div class="formRow">
                <table>
                    <tr>
                        <td><label style="margin-bottom:-2px;width: 70px">Cửa đặt :</label></td>
                        <td class="">
                            <select id="betSide" name="bet_side" style="margin-bottom:-2px;width: 150px;margin-left: 24px;">
                                <option value="1" <?php if($this->input->post('bet_side')== "1" ){echo "selected";} ?>>Tài</option>
                                <option value="0" <?php if($this->input->post('bet_side')== "0" ){echo "selected";} ?> >Xỉu</option>
                            </select>
                        </td>
                        <td><label style="margin-left: 50px;margin-bottom:-2px;width: 100px">Lọc Bot:</label></td>
                        <td class="">
                            <select id="filter_bot" name="filter_bot"
                                    style="margin-bottom:-2px;width: 150px">
                                <option value="-1" <?php if($this->input->post('filter_bot')== "-1" ){echo "selected";} ?>>Tất cả</option>
                                <option value="1" <?php if($this->input->post('filter_bot')== "1" ){echo "selected";} ?>>Người chơi</option>
                                <option value="0" <?php if($this->input->post('filter_bot')== "0" ){echo "selected";} ?> >Bot</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="formRow">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="resulttai">
                            <table class="table table-bordered">
                                <thead>
                                <tr style="height: 20px;">
                                    <td>Phiên</td>
                                    <td>Nick name</td>
                                    <td>Tiền đạt</td>
                                    <td>Cửa đặt</td>
                                    <td>Thưởng</td>
                                    <td>Hoàn trả</td>
                                    <td>Giây đặt</td>
                                    <td>Loại tiền</td>
                                    <td>Ngày tạo</td>
                                </tr>
                                </thead>
                                <tbody id="logaction">
                                </tbody>
                            </table>

                        <div class="text-center" style="float: right">
                            <ul id="pagination-demo" class="pagination-lg"></ul>
                        </div>
                        </div>
                        <div id="errortai" style="color: red;text-align: center"></div>

                    </div>
                </div>
            </div>
            <div class="formRow"></div>    </div>
</div>
<style>.spinner {
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -50px; /* half width of the spinner gif */
        margin-top: -50px; /* half height of the spinner gif */
        text-align: center;
        z-index: 1234;
        overflow: auto;
        width: 100px; /* width of the spinner gif */
        height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */
    }</style><div id="spinner" class="spinner" style="display:none;">
    <img id="img-spinner" src="<?php echo public_url('admin/images/gif-load.gif') ?>" alt="Loading"/>
</div>

<h1 id="resultsearch" style="position: absolute;top: 50%;left: 50%"></h1>

<script>
function resulttaixiudetail(reference_id, user_name, bet_value, bet_side, prize, refund, input_time, money_type, time_log) {
    var rs = "";
    rs += "<tr>";
    rs += "<td>" + reference_id + "</td>";
    rs += "<td>" + user_name + "</td>";
    rs += "<td>" + commaSeparateNumber(bet_value) + "</td>";
    if (bet_side == 0) {
        rs += "<td>" + "Xỉu" + "</td>";
    }
    else if (bet_side == 1) {
        rs += "<td>" + "Tài" + "</td>";
    }
    rs += "<td>" + commaSeparateNumber(prize) + "</td>";
    rs += "<td>" + commaSeparateNumber(refund) + "</td>";
    rs += "<td>" + input_time + "</td>";
    if (money_type == 0) {
        rs += "<td>" + "xu" + "</td>";
    } else if (money_type == 1) {
        rs += "<td>" + "Win" + "</td>";
    }
    rs += "<td>" + time_log + "</td>";
    rs += "</tr>";
    return rs;
}
$(document).ready(function () {
    var result = "";
    var oldpage = 0;
    var oldpage1 = 0;
    $("#spinner").show();
    $.ajax({
        type: "POST",
        url: "<?php echo admin_url('logminigame/detailphientaixiuajax')?>",
        data: {
            phientx: $("#phientx").val(),
            cuadat: $("#betSide").val(),
            filter_bot: $("#filter_bot").val(),
            money: $("#money").val(),
            pages: 1,
            nickname : $("#name").val()
        },

        dataType: 'json',
        success: function (result) {
            if (result.transactions != "") {
                $('#resulttai').css("display", "block");
                $('#errortai').css("display", "none")
                $("#spinner").hide();
                var totalPage = result.total;
                var countrow = result.totalRecord;
                $("#num").html(countrow);
                $.each(result.transactions, function (index, value) {
                    result += resulttaixiudetail(value.reference_id, value.user_name, value.bet_value, value.bet_side, value.prize, value.refund, value.input_time, value.money_type, value.time_log);
                });
                $('#logaction').html(result);
                $('#pagination-demo').twbsPagination({
                    totalPages: totalPage,
                    visiblePages: 5,
                    onPageClick: function (event, page) {
                        if (oldpage > 0) {
                            $("#spinner").show();
                            $.ajax({
                                type: "POST",
                                url: "<?php echo admin_url('logminigame/detailphientaixiuajax')?>",
                                data: {
                                    phientx: $("#phientx").val(),
                                    cuadat : $("#betSide").val(),
                                    filter_bot: $("#filter_bot").val(),
                                    money: $("#money").val(),
                                    pages : page,
                                    nickname : $("#name").val()
                                },
                                dataType: 'json',
                                success: function (result) {
                                    $("#spinner").hide();
                                    $.each(result.transactions, function (index, value) {
                                        result += resulttaixiudetail(value.reference_id, value.user_name, value.bet_value, value.bet_side, value.prize, value.refund, value.input_time, value.money_type, value.time_log);
                                    });
                                    $('#logaction').html(result);
                                }
                            });
                        }
                        oldpage = page;
                    }
                });

            } else {
                $("#spinner").hide();
                $('#pagination-demo').css("display", "none");
                $('#resulttai').css("display", "none");
                $('#errortai').html("Không có ai đặt tài");
            }
        }
    });
});
function replacedice(str) {
    return str.replace(/0/g, "bầu").replace(/1/g, "cua").replace(/2/g, "tôm").replace(/3/g, "cá").replace(/4/g, "gà").replace(/5/g, "hưou");
}
function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
    }
    return val;
}
</script>
