<?php $this->load->view('admin/luongtien/loghoantrahistorieshead', $this->data) ?>
<div class="line"></div>
<?php if ($role == false): ?>
    <div class="wrapper">
        <div class="widget">
            <div class="title">
                <h6>Hoàn trả</h6>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="wrapper">
        <?php $this->load->view('admin/message', $this->data); ?>

        <div class="widget backaccount">
            <h4 id="resultsearch" style="color: red;margin-left: 20px"></h4>
            <div class="title">
                <h6>Danh sách Hoàn trả</h6>
            </div>

            <form class="list_filter form" action="<?php echo admin_url('luongtien/hoantrahistories') ?>"
                  method="post">
                <div class="formRow">
                    <table>
                        <tr>
                            <td><label for="time" style="margin-left: 30px;margin-bottom:-2px;width: 120px">Ngày:</label></td>
                            <td class="item">
                                <div class="input-group date" id="datetimepicker">
                                    <input type="text" id="time" name="time" value="<?php echo $this->input->post('time') ?>">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </td>

                            <td><label for="nickName" style="margin-left: 50px;margin-bottom:-2px;width: 100px">Nick Name:</label></td>
                            <td><input type="text" style="margin-left: 20px;margin-bottom:-2px;width: 150px"
                                       id="nickName" value="<?php echo $this->input->post('nickName') ?>" name="nickName">
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="formRow">
                    <table>
                        <tr>

                            <td style="">
                                <input type="submit" id="search_tran" value="Tìm kiếm" class="button blueB"
                                       style="margin-left: 70px">
                            </td>
                            <td>
                                <input type="reset"
                                       onclick="window.location.href = '<?php echo admin_url('luongtien/hoantrahistories') ?>'; "
                                       value="Reset" class="basic" style="margin-left: 20px">
                            </td>
                            <td>
                            <span style="margin-left: 20px">
                                <?php $this->load->view('/admin/component/exportexcel', ['pre_file_name' => 'giftcodes']); ?>
                            </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="float-right">Hoàn trả casino:<span style="color:#0000ff" id="casinoFundSum"></span></h4>
                    <h4 class="float-right"> Tổng casino : <span style="color:#0000ff" id="casinoTotalSum"></span> | </h4>
                    <h4 class="float-right"> Hoàn trả sport : <span style="color:#0000ff" id="sportFundSum"></span> | </h4>
                    <h4 class="float-right">Tổng sport : <span style="color:#0000ff" id="sportTotalSum"></span> | </h4>
                    <h4 class="float-right">Hoàn trả egame : <span style="color:#0000ff" id="egameFundSum"></span> | </h4>
                    <h4 class="float-right">Tổng egame : <span style="color:#0000ff" id="egameTotalSum"></span> | </h4>
                </div>
            </div>
            <div class="formRow">
                <div class="row">
                    <div class="col-xs-12">
                        <table id="checkAll" class="table table-bordered" style="table-layout: fixed">
                            <thead>
                            <tr style="height: 20px;">
                                <th style="width:40px">STT</th>
                                <th style="width:40px" hidden>Id</th>

                                <th>Nick Name</th>
                                <th>Time</th>
                                <th>Vip Point</th>
                                <th>Tổng sport</th>
                                <th>Hoàn trả sport</th>
                                <th>Tổng casino</th>
                                <th>Hoàn trả casino</th>
                                <th>Tổng Egame</th>
                                <th>Hoàn trả Egame</th>
                                <th hidden>Cấp Vip</th>
                                <th hidden>Tổng các game</th>
                                <th hidden>Tổng hoàn trả</th>

                                <th>Thời gian tạo</th>
                                <th hidden>Cập nhật</th>
                                <th>Thành công</th>
                                <th width="40%">Thông báo</th>
                            </tr>
                            </thead>
                            <tbody id="logaction">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <h6 class="total-data">Tổng bản ghi:<span class="total-data-span" id="totalData"></span></h6>
    <div id="spinner" class="spinner" style="display:none;">
        <img id="img-spinner" src="<?php echo public_url('admin/images/gif-load.gif') ?>" alt="Loading"/>
    </div>
    <div class="text-center">
        <ul id="pagination-demo" class="pagination-lg"></ul>
    </div>
</div>
<script>
    var page_size = '<?php echo $this->input->post('page_size') ?>' || 10
    let capvip = {
        0: "Đá",
        1: "Kim Cương"
    }

    $(function () {
        var startDate = moment(new Date());
        $('#datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD',
            defaultDate: startDate,
            useCurrent: false,
        });
    });

    function resultSearchTransction(stt, value) {
        var rs = "";
        rs += "<tr>";
        rs += "<td class='stt'>" + stt + "</td>";
        rs += "<td style='display: none'>" + value.id + "</td>";
        rs += "<td >" + value.nick_name + "</td>";
        rs += "<td >" + value.time + "</td>";
        rs += "<td>" + value.vip_point + "</td>";
        rs += "<td>" + $.number(value.total_money_sport, undefined, '.', ',') + "</td>";
        rs += "<td>" + $.number(value.hoan_tra_sport, undefined, '.', ',') + "</td>";
        rs += "<td>" + $.number(value.total_money_casino, undefined, '.', ',') + "</td>";
        rs += "<td>" + $.number(value.hoan_tra_casino, undefined, '.', ',') + "</td>";
        rs += "<td>" + $.number(value.total_money_game, undefined, '.', ',') + "</td>";
        rs += "<td>" + $.number(value.hoan_tra_game, undefined, '.', ',') + "</td>";
        rs += "<td hidden>" + capvip[value.vip_index] + "</td>";
        rs += "<td hidden>" + $.number((value.total_money_sport + value.total_money_casino + value.total_money_game), undefined, '.', ',') + "</td>";
        rs += "<td hidden>" + $.number((value.hoan_tra_sport + value.hoan_tra_casino + value.hoan_tra_game), undefined, '.', ',') + "</td>";

        rs += "<td >" + convertTimestampToDate(value.created_at) + "</td>";
        rs += "<td hidden>" + convertTimestampToDate(value.updated_at) + "</td>";
        rs += "<td >" + value.send_success + "</td>";
        rs += "<td >" + (value.message || '-') + "</td>";
        return rs;
    }

    function convertTimestampToDate(timestamp) {
        if(!timestamp) {
            return '-'
        }

        let date = new Date(timestamp);
        return date.getFullYear() +
        "-" + (date.getMonth() + 1) +
        "-" + date.getDate() +
        " " + date.getHours() +
        ":" + date.getMinutes() +
        ":" + date.getSeconds()
    }

    $(document).ready(function () {
        $("#inputStatus").bootstrapToggle();
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        initData()
    });

    function initData() {
        var oldPage = 0;
        let timestamp;
        if ($("#time").val() != "") {
            var match = $("#time").val().match(/^(\d+)-(\d+)-(\d+)$/);
            var date = new Date(match[1], match[2] - 1, match[3]);
            timestamp = date.getTime();
        } else {
            timestamp = "";
        }

        $('#pagination-demo').css("display", "block");
        $("#spinner").show();
        $.ajax({
            type: "POST",
            url: "<?php echo admin_url('luongtien/hoantrahistoriesajax')?>",
            data: {
                time: timestamp,
                nickName: $("#nickName").val(),
                pages: 1,
                size: page_size
            },

            dataType: 'json',
            success: function (response) {
                $("#totalData").html(response.totalRecords);
                $("#spinner").hide();
                sumTotalRecords(response.data);
                if (response.totalRecords == 0 || response.data.length == 0) {
                    $('#pagination-demo').css("display", "none");
                    $("#resultsearch").html("Không tìm thấy kết quả");
                } else {
                    $("#resultsearch").html("");
                    let totalPage = Math.floor(response.totalRecords / page_size) + (response.totalRecords % page_size ? 1 : 0);
                    stt = 1;
                    let str = '';
                    let records = response.data.records
                    $.each(records, function (index, value) {
                        str += resultSearchTransction(stt, value);
                        stt++;
                    });
                    $('#logaction').html(str);

                    $('#pagination-demo').twbsPagination({
                        totalPages: totalPage,
                        visiblePages: 5,
                        onPageClick: function (event, page) {
                            if (oldPage > 0) {
                                $("#spinner").show();
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo admin_url('luongtien/hoantrahistoriesajax')?>",
                                    data: {
                                        time: timestamp,
                                        nickName: $("#nickName").val(),
                                        pages: page,
                                        size: page_size
                                    },
                                    dataType: 'json',
                                    success: function (response) {
                                        $("#resultsearch").html("");
                                        $("#spinner").hide();
                                        sumTotalRecords(response.data);
                                        stt = (page - 1) * page_size + 1;
                                        let str = '';
                                        let records = response.data.records
                                        $.each(records, function (index, value) {
                                            str += resultSearchTransction(stt, value);
                                            stt++;
                                        });
                                        $('#logaction').html(str);
                                    }, error: function () {
                                        $("#spinner").hide();
                                        $('#logaction').html("");
                                        $("#resultsearch").html("Hệ thống quá tải. Vui lòng gọi 19008698 hoặc F5 lại pages");
                                    }, timeout: 20000
                                });
                            }
                            oldPage = page;
                        }
                    });
                }
            }, error: function () {
                $("#spinner").hide();
                $('#logaction').html("");
                $("#resultsearch").html("Hệ thống quá tải. Vui lòng gọi 19008698 hoặc F5 lại pages");
            }, timeout: 20000
        })
    }

    function sumTotalRecords(data) {
        $('#egameTotalSum').html(data.egameTotalSum);
        $('#egameFundSum').html(data.egameFundSum);
        $('#sportTotalSum').html(data.sportTotalSum);
        $('#sportFundSum').html(data.sportFundSum);
        $('#casinoTotalSum').html(data.casinoTotalSum);
        $('#casinoFundSum').html(data.casinoFundSum);
    }
</script>