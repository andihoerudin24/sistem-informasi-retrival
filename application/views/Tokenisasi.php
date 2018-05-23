<center><h1>MENU TOKENISASI</h1></center>
<div class="row">
<div class="col-md-6">  
    <div class="page-header">
        <center><h3>Masukan kalimat</h3></center> 
    </div>
    <form role="form" class="form-horizontal">
        <div class="form-group">
            <label>Pesan</label>
            <textarea id="kata" class="texteditor"/></textarea>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" onclick="proses()">Proses</button>
        </div>
    </form>
</div>
    <div class="col-md-6">
    <div class="page-header">
        <center><h3>Hasil</h3></center> 
    </div>
        <center><div id="list"></div></center>
    </div>
</div>
<br>
<hr>

<script type="text/javascript">
    function proses() {
        var kata = $("#kata").val();
        $.ajax({
            type: "GET",
            url: "<?php echo base_url() ?>Tokenisasi/proses",
            data: "kata=" + kata,
            success: function (html) {
                swal("WOW","Berat Kamu Ga Akan Kuat Biar Aku Saja", "warning");
                $("#list").html(html);
            }
        })
    }
</script>