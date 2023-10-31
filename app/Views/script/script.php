<script>
    function formatRupiah(angka) {
        var bilangan = angka.toString().replace(/[^,\d]/g, '');
        var split = bilangan.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return 'Rp' + rupiah;
    }

    function unformat(value) {
        // Remove non-numeric characters from the value
        var unformattedValue = value.replace(/[^\d.-]/g, '');

        // Convert the unformatted value to a numeric value
        var numericValue = parseFloat(unformattedValue);

        return numericValue;
    }

    function hitungTotal() {
        var checkboxes = document.getElementsByTagName("input");
        var total = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya1" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total += biaya;
            }
            if (checkboxes[i].name === "biaya2" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total += biaya;
            }
            if (checkboxes[i].name === "biaya3" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total += biaya;
            }
            if (checkboxes[i].name === "biaya4" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total += biaya;
            }
            if (checkboxes[i].name === "biaya5" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total += biaya;
            }
            if (checkboxes[i].name === "biaya6" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total += biaya;
            }
        }

        var totalRupiah = formatRupiah(total);
        document.getElementById("total").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal2() {
        var checkboxes = document.getElementsByTagName("input");
        var total2 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya7" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total2 += biaya;
            }
            if (checkboxes[i].name === "biaya8" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total2 += biaya;
            }
            if (checkboxes[i].name === "biaya9" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total2 += biaya;
            }
            if (checkboxes[i].name === "biaya10" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total2 += biaya;
            }
            if (checkboxes[i].name === "biaya11" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total2 += biaya;
            }
            if (checkboxes[i].name === "biaya12" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total2 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total2);
        document.getElementById("total2").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal3() {
        var checkboxes = document.getElementsByTagName("input");
        var total3 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya13" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total3 += biaya;
            }
            if (checkboxes[i].name === "biaya14" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total3 += biaya;
            }
            if (checkboxes[i].name === "biaya15" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total3 += biaya;
            }
            if (checkboxes[i].name === "biaya16" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total3 += biaya;
            }
            if (checkboxes[i].name === "biaya17" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total3 += biaya;
            }
            if (checkboxes[i].name === "biaya18" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total3 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total3);
        document.getElementById("total3").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal4() {
        var checkboxes = document.getElementsByTagName("input");
        var total4 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya19" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total4 += biaya;
            }
            if (checkboxes[i].name === "biaya20" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total4 += biaya;
            }
            if (checkboxes[i].name === "biaya21" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total4 += biaya;
            }
            if (checkboxes[i].name === "biaya22" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total4 += biaya;
            }
            if (checkboxes[i].name === "biaya23" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total4 += biaya;
            }
            if (checkboxes[i].name === "biaya24" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total4 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total4);
        document.getElementById("total4").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal5() {
        var checkboxes = document.getElementsByTagName("input");
        var total5 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya25" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total5 += biaya;
            }
            if (checkboxes[i].name === "biaya26" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total5 += biaya;
            }
            if (checkboxes[i].name === "biaya27" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total5 += biaya;
            }
            if (checkboxes[i].name === "biaya28" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total5 += biaya;
            }
            if (checkboxes[i].name === "biaya29" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total5 += biaya;
            }
            if (checkboxes[i].name === "biaya30" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total5 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total5);
        document.getElementById("total5").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal6() {
        var checkboxes = document.getElementsByTagName("input");
        var total6 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya31" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total6 += biaya;
            }
            if (checkboxes[i].name === "biaya32" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total6 += biaya;
            }
            if (checkboxes[i].name === "biaya33" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total6 += biaya;
            }
            if (checkboxes[i].name === "biaya34" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total6 += biaya;
            }
            if (checkboxes[i].name === "biaya35" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total6 += biaya;
            }
            if (checkboxes[i].name === "biaya36" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total6 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total6);
        document.getElementById("total6").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal7() {
        var checkboxes = document.getElementsByTagName("input");
        var total7 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya37" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total7 += biaya;
            }
            if (checkboxes[i].name === "biaya38" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total7 += biaya;
            }
            if (checkboxes[i].name === "biaya39" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total7 += biaya;
            }
            if (checkboxes[i].name === "biaya40" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total7 += biaya;
            }
            if (checkboxes[i].name === "biaya41" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total7 += biaya;
            }
            if (checkboxes[i].name === "biaya42" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total7 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total7);
        document.getElementById("total7").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal8() {
        var checkboxes = document.getElementsByTagName("input");
        var total8 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya43" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total8 += biaya;
            }
            if (checkboxes[i].name === "biaya44" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total8 += biaya;
            }
            if (checkboxes[i].name === "biaya45" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total8 += biaya;
            }
            if (checkboxes[i].name === "biaya46" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total8 += biaya;
            }
            if (checkboxes[i].name === "biaya47" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total8 += biaya;
            }
            if (checkboxes[i].name === "biaya48" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total8 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total8);
        document.getElementById("total8").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal9() {
        var checkboxes = document.getElementsByTagName("input");
        var total9 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya49" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya50" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya51" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya52" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya53" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya54" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya1049" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya1050" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya1051" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya1052" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya1053" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
            if (checkboxes[i].name === "biaya1054" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total9 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total9);
        document.getElementById("total9").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal10() {
        var checkboxes = document.getElementsByTagName("input");
        var total10 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya55" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total10 += biaya;
            }
            if (checkboxes[i].name === "biaya56" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total10 += biaya;
            }
            if (checkboxes[i].name === "biaya57" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total10 += biaya;
            }
            if (checkboxes[i].name === "biaya58" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total10 += biaya;
            }
            if (checkboxes[i].name === "biaya59" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total10 += biaya;
            }
            if (checkboxes[i].name === "biaya60" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total10 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total10);
        document.getElementById("total10").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal11() {
        var checkboxes = document.getElementsByTagName("input");
        var total11 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya61" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total11 += biaya;
            }
            if (checkboxes[i].name === "biaya62" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total11 += biaya;
            }
            if (checkboxes[i].name === "biaya63" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total11 += biaya;
            }
            if (checkboxes[i].name === "biaya64" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total11 += biaya;
            }
            if (checkboxes[i].name === "biaya65" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total11 += biaya;
            }
            if (checkboxes[i].name === "biaya66" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total11 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total11);
        document.getElementById("total11").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal12() {
        var checkboxes = document.getElementsByTagName("input");
        var total12 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya67" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total12 += biaya;
            }
            if (checkboxes[i].name === "biaya68" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total12 += biaya;
            }
            if (checkboxes[i].name === "biaya69" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total12 += biaya;
            }
            if (checkboxes[i].name === "biaya70" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total12 += biaya;
            }
            if (checkboxes[i].name === "biaya71" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total12 += biaya;
            }
            if (checkboxes[i].name === "biaya72" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total12 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total12);
        document.getElementById("total12").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal13() {
        var checkboxes = document.getElementsByTagName("input");
        var total13 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya73" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total13 += biaya;
            }
            if (checkboxes[i].name === "biaya74" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total13 += biaya;
            }
            if (checkboxes[i].name === "biaya75" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total13 += biaya;
            }
            if (checkboxes[i].name === "biaya76" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total13 += biaya;
            }
            if (checkboxes[i].name === "biaya77" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total13 += biaya;
            }
            if (checkboxes[i].name === "biaya78" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total13 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total13);
        document.getElementById("total13").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal14() {
        var checkboxes = document.getElementsByTagName("input");
        var total14 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya79" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total14 += biaya;
            }
            if (checkboxes[i].name === "biaya80" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total14 += biaya;
            }
            if (checkboxes[i].name === "biaya81" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total14 += biaya;
            }
            if (checkboxes[i].name === "biaya82" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total14 += biaya;
            }
            if (checkboxes[i].name === "biaya83" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total14 += biaya;
            }
            if (checkboxes[i].name === "biaya84" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total14 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total14);
        document.getElementById("total14").innerHTML = "" + totalRupiah;
        calculateSum();
    }


    function hitungTotal15() {
        var checkboxes = document.getElementsByTagName("input");
        var total15 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya85" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total15 += biaya;
            }
            if (checkboxes[i].name === "biaya86" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total15 += biaya;
            }
            if (checkboxes[i].name === "biaya87" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total15 += biaya;
            }
            if (checkboxes[i].name === "biaya88" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total15 += biaya;
            }
            if (checkboxes[i].name === "biaya89" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total15 += biaya;
            }
            if (checkboxes[i].name === "biaya90" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total15 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total15);
        document.getElementById("total15").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal16() {
        var checkboxes = document.getElementsByTagName("input");
        var total16 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya91" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total16 += biaya;
            }
            if (checkboxes[i].name === "biaya92" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total16 += biaya;
            }
            if (checkboxes[i].name === "biaya93" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total16 += biaya;
            }
            if (checkboxes[i].name === "biaya94" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total16 += biaya;
            }
            if (checkboxes[i].name === "biaya95" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total16 += biaya;
            }
            if (checkboxes[i].name === "biaya96" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total16 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total16);
        document.getElementById("total16").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal17() {
        var checkboxes = document.getElementsByTagName("input");
        var total17 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya97" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total17 += biaya;
            }
            if (checkboxes[i].name === "biaya98" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total17 += biaya;
            }
            if (checkboxes[i].name === "biaya99" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total17 += biaya;
            }
            if (checkboxes[i].name === "biaya100" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total17 += biaya;
            }
            if (checkboxes[i].name === "biaya101" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total17 += biaya;
            }
            if (checkboxes[i].name === "biaya102" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total17 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total17);
        document.getElementById("total17").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal18() {
        var checkboxes = document.getElementsByTagName("input");
        var total18 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya103" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total18 += biaya;
            }
            if (checkboxes[i].name === "biaya104" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total18 += biaya;
            }
            if (checkboxes[i].name === "biaya105" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total18 += biaya;
            }
            if (checkboxes[i].name === "biaya106" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total18 += biaya;
            }
            if (checkboxes[i].name === "biaya107" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total18 += biaya;
            }
            if (checkboxes[i].name === "biaya108" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total18 += biaya;
            }
            
        }
        var totalRupiah = formatRupiah(total18);
        document.getElementById("total18").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal19() {
        var checkboxes = document.getElementsByTagName("input");
        var total19 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya109" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total19 += biaya;
            }
            if (checkboxes[i].name === "biaya110" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total19 += biaya;
            }
            if (checkboxes[i].name === "biaya111" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total19 += biaya;
            }
            if (checkboxes[i].name === "biaya112" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total19 += biaya;
            }
            if (checkboxes[i].name === "biaya113" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total19 += biaya;
            }
            if (checkboxes[i].name === "biaya114" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total19 += biaya;
            }
            
        }
        var totalRupiah = formatRupiah(total19);
        document.getElementById("total19").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal20() {
        var checkboxes = document.getElementsByTagName("input");
        var total20 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya115" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total20 += biaya;
            }
            if (checkboxes[i].name === "biaya116" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total20 += biaya;
            }
            if (checkboxes[i].name === "biaya117" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total20 += biaya;
            }
            if (checkboxes[i].name === "biaya118" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total20 += biaya;
            }
            if (checkboxes[i].name === "biaya119" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total20 += biaya;
            }
            if (checkboxes[i].name === "biaya120" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total20 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total20);
        document.getElementById("total20").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal21() {
        var checkboxes = document.getElementsByTagName("input");
        var total21 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya121" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total21 += biaya;
            }
            if (checkboxes[i].name === "biaya122" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total21 += biaya;
            }
            if (checkboxes[i].name === "biaya123" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total21 += biaya;
            }
            if (checkboxes[i].name === "biaya124" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total21 += biaya;
            }
            if (checkboxes[i].name === "biaya125" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total21 += biaya;
            }
            if (checkboxes[i].name === "biaya126" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total21 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total21);
        document.getElementById("total21").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal22() {
        var checkboxes = document.getElementsByTagName("input");
        var total22 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya127" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total22 += biaya;
            }
            if (checkboxes[i].name === "biaya128" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total22 += biaya;
            }
            if (checkboxes[i].name === "biaya129" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total22 += biaya;
            }
            if (checkboxes[i].name === "biaya130" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total22 += biaya;
            }
            if (checkboxes[i].name === "biaya131" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total22 += biaya;
            }
            if (checkboxes[i].name === "biaya132" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total22 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total22);
        document.getElementById("total22").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal23() {
        var checkboxes = document.getElementsByTagName("input");
        var total23 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya133" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total23 += biaya;
            }
            if (checkboxes[i].name === "biaya134" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total23 += biaya;
            }
            if (checkboxes[i].name === "biaya135" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total23 += biaya;
            }
            if (checkboxes[i].name === "biaya136" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total23 += biaya;
            }
            if (checkboxes[i].name === "biaya137" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total23 += biaya;
            }
            if (checkboxes[i].name === "biaya138" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total23 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total23);
        document.getElementById("total23").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal24() {
        var checkboxes = document.getElementsByTagName("input");
        var total24 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya139" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total24 += biaya;
            }
            if (checkboxes[i].name === "biaya140" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total24 += biaya;
            }
            if (checkboxes[i].name === "biaya141" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total24 += biaya;
            }
            if (checkboxes[i].name === "biaya142" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total24 += biaya;
            }
            if (checkboxes[i].name === "biaya143" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total24 += biaya;
            }
            if (checkboxes[i].name === "biaya144" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total24 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total24);
        document.getElementById("total24").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal25() {
        var checkboxes = document.getElementsByTagName("input");
        var total25 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya145" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total25 += biaya;
            }
            if (checkboxes[i].name === "biaya146" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total25 += biaya;
            }
            if (checkboxes[i].name === "biaya147" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total25 += biaya;
            }
            if (checkboxes[i].name === "biaya148" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total25 += biaya;
            }
            if (checkboxes[i].name === "biaya149" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total25 += biaya;
            }
            if (checkboxes[i].name === "biaya150" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total25 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total25);
        document.getElementById("total25").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal26() {
        var checkboxes = document.getElementsByTagName("input");
        var total26 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya151" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total26 += biaya;
            }
            if (checkboxes[i].name === "biaya152" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total26 += biaya;
            }
            if (checkboxes[i].name === "biaya153" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total26 += biaya;
            }
            if (checkboxes[i].name === "biaya154" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total26 += biaya;
            }
            if (checkboxes[i].name === "biaya155" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total26 += biaya;
            }
            if (checkboxes[i].name === "biaya156" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total26 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total26);
        document.getElementById("total26").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal27() {
        var checkboxes = document.getElementsByTagName("input");
        var total27 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya157" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total27 += biaya;
            }
            if (checkboxes[i].name === "biaya158" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total27 += biaya;
            }
            if (checkboxes[i].name === "biaya159" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total27 += biaya;
            }
            if (checkboxes[i].name === "biaya160" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total27 += biaya;
            }
            if (checkboxes[i].name === "biaya161" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total27 += biaya;
            }
            if (checkboxes[i].name === "biaya162" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total27 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total27);
        document.getElementById("total27").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal28() {
        var checkboxes = document.getElementsByTagName("input");
        var total28 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya163" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total28 += biaya;
            }
            if (checkboxes[i].name === "biaya164" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total28 += biaya;
            }
            if (checkboxes[i].name === "biaya165" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total28 += biaya;
            }
            if (checkboxes[i].name === "biaya166" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total28 += biaya;
            }
            if (checkboxes[i].name === "biaya167" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total28 += biaya;
            }
            if (checkboxes[i].name === "biaya168" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total28 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total28);
        document.getElementById("total28").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal29() {
        var checkboxes = document.getElementsByTagName("input");
        var total29 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya169" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total29 += biaya;
            }
            if (checkboxes[i].name === "biaya170" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total29 += biaya;
            }
            if (checkboxes[i].name === "biaya171" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total29 += biaya;
            }
            if (checkboxes[i].name === "biaya172" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total29 += biaya;
            }
            if (checkboxes[i].name === "biaya173" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total29 += biaya;
            }
            if (checkboxes[i].name === "biaya174" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total29 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total29);
        document.getElementById("total29").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal30() {
        var checkboxes = document.getElementsByTagName("input");
        var total30 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            
            if (checkboxes[i].name === "biaya175" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total30 += biaya;
            }
            if (checkboxes[i].name === "biaya176" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total30 += biaya;
            }
            if (checkboxes[i].name === "biaya177" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total30 += biaya;
            }
            if (checkboxes[i].name === "biaya178" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total30 += biaya;
            }
            if (checkboxes[i].name === "biaya179" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total30 += biaya;
            }
            if (checkboxes[i].name === "biaya180" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total30 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total30);
        document.getElementById("total30").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal31() {
        var checkboxes = document.getElementsByTagName("input");
        var total31 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya181" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total31 += biaya;
            }
            if (checkboxes[i].name === "biaya182" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total31 += biaya;
            }
            if (checkboxes[i].name === "biaya183" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total31 += biaya;
            }
            if (checkboxes[i].name === "biaya184" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total31 += biaya;
            }
            if (checkboxes[i].name === "biaya185" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total31 += biaya;
            }
            if (checkboxes[i].name === "biaya186" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total31 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total31);
        document.getElementById("total31").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal32() {
        var checkboxes = document.getElementsByTagName("input");
        var total32 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya187" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total32 += biaya;
            }
            if (checkboxes[i].name === "biaya188" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total32 += biaya;
            }
            if (checkboxes[i].name === "biaya189" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total32 += biaya;
            }
            if (checkboxes[i].name === "biaya190" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total32 += biaya;
            }
            if (checkboxes[i].name === "biaya191" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total32 += biaya;
            }
            if (checkboxes[i].name === "biaya192" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total32 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total32);
        document.getElementById("total32").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal33() {
        var checkboxes = document.getElementsByTagName("input");
        var total33 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya193" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total33 += biaya;
            }
            if (checkboxes[i].name === "biaya194" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total33 += biaya;
            }
            if (checkboxes[i].name === "biaya195" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total33 += biaya;
            }
            if (checkboxes[i].name === "biaya196" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total33 += biaya;
            }
            if (checkboxes[i].name === "biaya197" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total33 += biaya;
            }
            if (checkboxes[i].name === "biaya198" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total33 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total33);
        document.getElementById("total33").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal34() {
        var checkboxes = document.getElementsByTagName("input");
        var total34 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya199" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total34 += biaya;
            }
            if (checkboxes[i].name === "biaya200" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total34 += biaya;
            }
            if (checkboxes[i].name === "biaya201" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total34 += biaya;
            }
            if (checkboxes[i].name === "biaya202" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total34 += biaya;
            }
            if (checkboxes[i].name === "biaya203" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total34 += biaya;
            }
            if (checkboxes[i].name === "biaya204" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total34 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total34);
        document.getElementById("total34").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal35() {
        var checkboxes = document.getElementsByTagName("input");
        var total35 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya205" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total35 += biaya;
            }
            if (checkboxes[i].name === "biaya206" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total35 += biaya;
            }
            if (checkboxes[i].name === "biaya207" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total35 += biaya;
            }
            if (checkboxes[i].name === "biaya208" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total35 += biaya;
            }
            if (checkboxes[i].name === "biaya209" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total35 += biaya;
            }
            if (checkboxes[i].name === "biaya210" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total35 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total35);
        document.getElementById("total35").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal36() {
        var checkboxes = document.getElementsByTagName("input");
        var total36 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya211" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total36 += biaya;
            }
            if (checkboxes[i].name === "biaya212" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total36 += biaya;
            }
            if (checkboxes[i].name === "biaya213" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total36 += biaya;
            }
            if (checkboxes[i].name === "biaya214" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total36 += biaya;
            }
            if (checkboxes[i].name === "biaya215" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total36 += biaya;
            }
            if (checkboxes[i].name === "biaya216" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total36 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total36);
        document.getElementById("total36").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal37() {
        var checkboxes = document.getElementsByTagName("input");
        var total37 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya217" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total37 += biaya;
            }
            if (checkboxes[i].name === "biaya218" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total37 += biaya;
            }
            if (checkboxes[i].name === "biaya219" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total37 += biaya;
            }
            if (checkboxes[i].name === "biaya220" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total37 += biaya;
            }
            if (checkboxes[i].name === "biaya221" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total37 += biaya;
            }
            if (checkboxes[i].name === "biaya222" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total37 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total37);
        document.getElementById("total37").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal38() {
        var checkboxes = document.getElementsByTagName("input");
        var total38 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya223" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total38 += biaya;
            }
            if (checkboxes[i].name === "biaya224" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total38 += biaya;
            }
            if (checkboxes[i].name === "biaya225" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total38 += biaya;
            }
            if (checkboxes[i].name === "biaya226" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total38 += biaya;
            }
            if (checkboxes[i].name === "biaya227" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total38 += biaya;
            }
            if (checkboxes[i].name === "biaya228" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total38 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total38);
        document.getElementById("total38").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal39() {
        var checkboxes = document.getElementsByTagName("input");
        var total39 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya229" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total39 += biaya;
            }
            if (checkboxes[i].name === "biaya230" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total39 += biaya;
            }
            if (checkboxes[i].name === "biaya231" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total39 += biaya;
            }
            if (checkboxes[i].name === "biaya232" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total39 += biaya;
            }
            if (checkboxes[i].name === "biaya233" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total39 += biaya;
            }
            if (checkboxes[i].name === "biaya234" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total39 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total39);
        document.getElementById("total39").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal40() {
        var checkboxes = document.getElementsByTagName("input");
        var total40 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya235" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total40 += biaya;
            }
            if (checkboxes[i].name === "biaya236" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total40 += biaya;
            }
            if (checkboxes[i].name === "biaya237" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total40 += biaya;
            }
            if (checkboxes[i].name === "biaya238" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total40 += biaya;
            }
            if (checkboxes[i].name === "biaya239" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total40 += biaya;
            }
            if (checkboxes[i].name === "biaya240" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total40 += biaya;
            }

        }
        var totalRupiah = formatRupiah(total40);
        document.getElementById("total40").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal41() {
        var checkboxes = document.getElementsByTagName("input");
        var total41 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya241" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total41 += biaya;
            }
            if (checkboxes[i].name === "biaya242" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total41 += biaya;
            }
            if (checkboxes[i].name === "biaya243" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total41 += biaya;
            }
            if (checkboxes[i].name === "biaya244" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total41 += biaya;
            }
            if (checkboxes[i].name === "biaya245" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total41 += biaya;
            }
            if (checkboxes[i].name === "biaya246" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total41 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total41);
        document.getElementById("total41").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal42() {
        var checkboxes = document.getElementsByTagName("input");
        var total42 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya247" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total42 += biaya;
            }
            if (checkboxes[i].name === "biaya248" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total42 += biaya;
            }
            if (checkboxes[i].name === "biaya249" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total42 += biaya;
            }
            if (checkboxes[i].name === "biaya250" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total42 += biaya;
            }
            if (checkboxes[i].name === "biaya251" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total42 += biaya;
            }
            if (checkboxes[i].name === "biaya252" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total42 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total42);
        document.getElementById("total42").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal43() {
        var checkboxes = document.getElementsByTagName("input");
        var total43 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya253" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total43 += biaya;
            }
            if (checkboxes[i].name === "biaya254" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total43 += biaya;
            }
            if (checkboxes[i].name === "biaya255" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total43 += biaya;
            }
            if (checkboxes[i].name === "biaya256" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total43 += biaya;
            }
            if (checkboxes[i].name === "biaya257" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total43 += biaya;
            }
            if (checkboxes[i].name === "biaya258" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total43 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total43);
        document.getElementById("total43").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal44() {
        var checkboxes = document.getElementsByTagName("input");
        var total44 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya259" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total44 += biaya;
            }
            if (checkboxes[i].name === "biaya260" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total44 += biaya;
            }
            if (checkboxes[i].name === "biaya261" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total44 += biaya;
            }
            if (checkboxes[i].name === "biaya262" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total44 += biaya;
            }
            if (checkboxes[i].name === "biaya263" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total44 += biaya;
            }
            if (checkboxes[i].name === "biaya264" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total44 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total44);
        document.getElementById("total44").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal45() {
        var checkboxes = document.getElementsByTagName("input");
        var total45 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya265" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total45 += biaya;
            }
            if (checkboxes[i].name === "biaya266" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total45 += biaya;
            }
            if (checkboxes[i].name === "biaya267" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total45 += biaya;
            }
            if (checkboxes[i].name === "biaya268" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total45 += biaya;
            }
            if (checkboxes[i].name === "biaya269" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total45 += biaya;
            }
            if (checkboxes[i].name === "biaya270" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total45 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total45);
        document.getElementById("total45").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal46() {
        var checkboxes = document.getElementsByTagName("input");
        var total46 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya271" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total46 += biaya;
            }
            if (checkboxes[i].name === "biaya272" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total46 += biaya;
            }
            if (checkboxes[i].name === "biaya273" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total46 += biaya;
            }
            if (checkboxes[i].name === "biaya274" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total46 += biaya;
            }
            if (checkboxes[i].name === "biaya275" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total46 += biaya;
            }
            if (checkboxes[i].name === "biaya276" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total46 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total46);
        document.getElementById("total46").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal47() {
        var checkboxes = document.getElementsByTagName("input");
        var total47 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya277" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total47 += biaya;
            }
            if (checkboxes[i].name === "biaya278" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total47 += biaya;
            }
            if (checkboxes[i].name === "biaya279" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total47 += biaya;
            }
            if (checkboxes[i].name === "biaya280" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total47 += biaya;
            }
            if (checkboxes[i].name === "biaya281" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total47 += biaya;
            }
            if (checkboxes[i].name === "biaya282" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total47 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total47);
        document.getElementById("total47").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal48() {
        var checkboxes = document.getElementsByTagName("input");
        var total48 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya283" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total48 += biaya;
            }
            if (checkboxes[i].name === "biaya284" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total48 += biaya;
            }
            if (checkboxes[i].name === "biaya285" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total48 += biaya;
            }
            if (checkboxes[i].name === "biaya286" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total48 += biaya;
            }
            if (checkboxes[i].name === "biaya287" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total48 += biaya;
            }
            if (checkboxes[i].name === "biaya288" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total48 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total48);
        document.getElementById("total48").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal49() {
        var checkboxes = document.getElementsByTagName("input");
        var total49 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya289" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total49 += biaya;
            }
            if (checkboxes[i].name === "biaya290" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total49 += biaya;
            }
            if (checkboxes[i].name === "biaya291" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total49 += biaya;
            }
            if (checkboxes[i].name === "biaya292" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total49 += biaya;
            }
            if (checkboxes[i].name === "biaya293" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total49 += biaya;
            }
            if (checkboxes[i].name === "biaya294" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total49 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total49);
        document.getElementById("total49").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal50() {
        var checkboxes = document.getElementsByTagName("input");
        var total50 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya295" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total50 += biaya;
            }
            if (checkboxes[i].name === "biaya296" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total50 += biaya;
            }
            if (checkboxes[i].name === "biaya297" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total50 += biaya;
            }
            if (checkboxes[i].name === "biaya298" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total50 += biaya;
            }
            if (checkboxes[i].name === "biaya299" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total50 += biaya;
            }
            if (checkboxes[i].name === "biaya300" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total50 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total50);
        document.getElementById("total50").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal51() {
        var checkboxes = document.getElementsByTagName("input");
        var total51 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya301" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total51 += biaya;
            }
            if (checkboxes[i].name === "biaya302" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total51 += biaya;
            }
            if (checkboxes[i].name === "biaya303" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total51 += biaya;
            }
            if (checkboxes[i].name === "biaya304" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total51 += biaya;
            }
            if (checkboxes[i].name === "biaya305" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total51 += biaya;
            }
            if (checkboxes[i].name === "biaya306" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total51 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total51);
        document.getElementById("total51").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal52() {
        var checkboxes = document.getElementsByTagName("input");
        var total52 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya307" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total52 += biaya;
            }
            if (checkboxes[i].name === "biaya308" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total52 += biaya;
            }
            if (checkboxes[i].name === "biaya309" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total52 += biaya;
            }
            if (checkboxes[i].name === "biaya310" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total52 += biaya;
            }
            if (checkboxes[i].name === "biaya311" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total52 += biaya;
            }
            if (checkboxes[i].name === "biaya312" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total52 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total52);
        document.getElementById("total52").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal53() {
        var checkboxes = document.getElementsByTagName("input");
        var total53 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya313" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total53 += biaya;
            }
            if (checkboxes[i].name === "biaya314" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total53 += biaya;
            }
            if (checkboxes[i].name === "biaya315" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total53 += biaya;
            }
            if (checkboxes[i].name === "biaya316" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total53 += biaya;
            }
            if (checkboxes[i].name === "biaya317" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total53 += biaya;
            }
            if (checkboxes[i].name === "biaya318" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total53 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total53);
        document.getElementById("total53").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal54() {
        var checkboxes = document.getElementsByTagName("input");
        var total54 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya319" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total54 += biaya;
            }
            if (checkboxes[i].name === "biaya320" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total54 += biaya;
            }
            if (checkboxes[i].name === "biaya321" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total54 += biaya;
            }
            if (checkboxes[i].name === "biaya322" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total54 += biaya;
            }
            if (checkboxes[i].name === "biaya323" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total54 += biaya;
            }
            if (checkboxes[i].name === "biaya324" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total54 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total54);
        document.getElementById("total54").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal55() {
        var checkboxes = document.getElementsByTagName("input");
        var total55 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya325" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total55 += biaya;
            }
            if (checkboxes[i].name === "biaya326" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total55 += biaya;
            }
            if (checkboxes[i].name === "biaya327" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total55 += biaya;
            }
            if (checkboxes[i].name === "biaya328" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total55 += biaya;
            }
            if (checkboxes[i].name === "biaya329" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total55 += biaya;
            }
            if (checkboxes[i].name === "biaya330" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total55 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total55);
        document.getElementById("total55").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal56() {
        var checkboxes = document.getElementsByTagName("input");
        var total56 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya331" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total56 += biaya;
            }
            if (checkboxes[i].name === "biaya332" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total56 += biaya;
            }
            if (checkboxes[i].name === "biaya333" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total56 += biaya;
            }
            if (checkboxes[i].name === "biaya334" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total56 += biaya;
            }
            if (checkboxes[i].name === "biaya335" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total56 += biaya;
            }
            if (checkboxes[i].name === "biaya336" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total56 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total56);
        document.getElementById("total56").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal57() {
        var checkboxes = document.getElementsByTagName("input");
        var total57 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya337" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total57 += biaya;
            }
            if (checkboxes[i].name === "biaya338" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total57 += biaya;
            }
            if (checkboxes[i].name === "biaya339" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total57 += biaya;
            }
            if (checkboxes[i].name === "biaya340" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total57 += biaya;
            }
            if (checkboxes[i].name === "biaya341" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total57 += biaya;
            }
            if (checkboxes[i].name === "biaya342" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total57 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total57);
        document.getElementById("total57").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal58() {
        var checkboxes = document.getElementsByTagName("input");
        var total58 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya343" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total58 += biaya;
            }
            if (checkboxes[i].name === "biaya344" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total58 += biaya;
            }
            if (checkboxes[i].name === "biaya345" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total58 += biaya;
            }
            if (checkboxes[i].name === "biaya346" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total58 += biaya;
            }
            if (checkboxes[i].name === "biaya347" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total58 += biaya;
            }
            if (checkboxes[i].name === "biaya348" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total58 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total58);
        document.getElementById("total58").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal59() {
        var checkboxes = document.getElementsByTagName("input");
        var total59 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya349" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total59 += biaya;
            }
            if (checkboxes[i].name === "biaya350" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total59 += biaya;
            }
            if (checkboxes[i].name === "biaya351" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total59 += biaya;
            }
            if (checkboxes[i].name === "biaya352" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total59 += biaya;
            }
            if (checkboxes[i].name === "biaya353" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total59 += biaya;
            }
            if (checkboxes[i].name === "biaya354" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total59 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total59);
        document.getElementById("total59").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal60() {
        var checkboxes = document.getElementsByTagName("input");
        var total60 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya355" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total60 += biaya;
            }
            if (checkboxes[i].name === "biaya356" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total60 += biaya;
            }
            if (checkboxes[i].name === "biaya357" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total60 += biaya;
            }
            if (checkboxes[i].name === "biaya358" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total60 += biaya;
            }
            if (checkboxes[i].name === "biaya359" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total60 += biaya;
            }
            if (checkboxes[i].name === "biaya360" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total60 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total60);
        document.getElementById("total60").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal61() {
        var checkboxes = document.getElementsByTagName("input");
        var total61 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya361" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total61 += biaya;
            }
            if (checkboxes[i].name === "biaya362" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total61 += biaya;
            }
            if (checkboxes[i].name === "biaya363" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total61 += biaya;
            }
            if (checkboxes[i].name === "biaya364" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total61 += biaya;
            }
            if (checkboxes[i].name === "biaya365" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total61 += biaya;
            }
            if (checkboxes[i].name === "biaya366" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total61 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total61);
        document.getElementById("total61").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal62() {
        var checkboxes = document.getElementsByTagName("input");
        var total62 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya367" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total62 += biaya;
            }
            if (checkboxes[i].name === "biaya368" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total62 += biaya;
            }
            if (checkboxes[i].name === "biaya369" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total62 += biaya;
            }
            if (checkboxes[i].name === "biaya370" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total62 += biaya;
            }
            if (checkboxes[i].name === "biaya371" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total62 += biaya;
            }
            if (checkboxes[i].name === "biaya372" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total62 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total62);
        document.getElementById("total62").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal63() {
        var checkboxes = document.getElementsByTagName("input");
        var total63 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya373" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total63 += biaya;
            }
            if (checkboxes[i].name === "biaya374" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total63 += biaya;
            }
            if (checkboxes[i].name === "biaya375" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total63 += biaya;
            }
            if (checkboxes[i].name === "biaya376" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total63 += biaya;
            }
            if (checkboxes[i].name === "biaya377" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total63 += biaya;
            }
            if (checkboxes[i].name === "biaya378" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total63 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total63);
        document.getElementById("total63").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal64() {
        var checkboxes = document.getElementsByTagName("input");
        var total64 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya379" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total64 += biaya;
            }
            if (checkboxes[i].name === "biaya380" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total64 += biaya;
            }
            if (checkboxes[i].name === "biaya381" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total64 += biaya;
            }
            if (checkboxes[i].name === "biaya382" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total64 += biaya;
            }
            if (checkboxes[i].name === "biaya383" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total64 += biaya;
            }
            if (checkboxes[i].name === "biaya384" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total64 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total64);
        document.getElementById("total64").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal65() {
        var checkboxes = document.getElementsByTagName("input");
        var total65 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya385" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total65 += biaya;
            }
            if (checkboxes[i].name === "biaya386" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total65 += biaya;
            }
            if (checkboxes[i].name === "biaya387" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total65 += biaya;
            }
            if (checkboxes[i].name === "biaya388" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total65 += biaya;
            }
            if (checkboxes[i].name === "biaya389" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total65 += biaya;
            }
            if (checkboxes[i].name === "biaya390" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total65 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total65);
        document.getElementById("total65").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal66() {
        var checkboxes = document.getElementsByTagName("input");
        var total66 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya391" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total66 += biaya;
            }
            if (checkboxes[i].name === "biaya392" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total66 += biaya;
            }
            if (checkboxes[i].name === "biaya393" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total66 += biaya;
            }
            if (checkboxes[i].name === "biaya394" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total66 += biaya;
            }
            if (checkboxes[i].name === "biaya395" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total66 += biaya;
            }
            if (checkboxes[i].name === "biaya396" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total66 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total66);
        document.getElementById("total66").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal67() {
        var checkboxes = document.getElementsByTagName("input");
        var total67 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya397" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total67 += biaya;
            }
            if (checkboxes[i].name === "biaya398" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total67 += biaya;
            }
            if (checkboxes[i].name === "biaya399" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total67 += biaya;
            }
            if (checkboxes[i].name === "biaya400" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total67 += biaya;
            }
            if (checkboxes[i].name === "biaya401" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total67 += biaya;
            }
            if (checkboxes[i].name === "biaya402" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total67 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total67);
        document.getElementById("total67").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal68() {
        var checkboxes = document.getElementsByTagName("input");
        var total68 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya403" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total68 += biaya;
            }
            if (checkboxes[i].name === "biaya404" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total68 += biaya;
            }
            if (checkboxes[i].name === "biaya405" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total68 += biaya;
            }
            if (checkboxes[i].name === "biaya406" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total68 += biaya;
            }
            if (checkboxes[i].name === "biaya407" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total68 += biaya;
            }
            if (checkboxes[i].name === "biaya408" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total68 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total68);
        document.getElementById("total68").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal69() {
        var checkboxes = document.getElementsByTagName("input");
        var total69 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya409" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total69 += biaya;
            }
            if (checkboxes[i].name === "biaya410" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total69 += biaya;
            }
            if (checkboxes[i].name === "biaya411" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total69 += biaya;
            }
            if (checkboxes[i].name === "biaya412" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total69 += biaya;
            }
            if (checkboxes[i].name === "biaya413" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total69 += biaya;
            }
            if (checkboxes[i].name === "biaya414" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total69 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total69);
        document.getElementById("total69").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal70() {
        var checkboxes = document.getElementsByTagName("input");
        var total70 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya415" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total70 += biaya;
            }
            if (checkboxes[i].name === "biaya416" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total70 += biaya;
            }
            if (checkboxes[i].name === "biaya417" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total70 += biaya;
            }
            if (checkboxes[i].name === "biaya418" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total70 += biaya;
            }
            if (checkboxes[i].name === "biaya419" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total70 += biaya;
            }
            if (checkboxes[i].name === "biaya420" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total70 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total70);
        document.getElementById("total70").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal71() {
        var checkboxes = document.getElementsByTagName("input");
        var total71 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya421" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total71 += biaya;
            }
            if (checkboxes[i].name === "biaya422" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total71 += biaya;
            }
            if (checkboxes[i].name === "biaya423" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total71 += biaya;
            }
            if (checkboxes[i].name === "biaya424" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total71 += biaya;
            }
            if (checkboxes[i].name === "biaya425" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total71 += biaya;
            }
            if (checkboxes[i].name === "biaya426" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total71 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total71);
        document.getElementById("total71").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal72() {
        var checkboxes = document.getElementsByTagName("input");
        var total72 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya427" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total72 += biaya;
            }
            if (checkboxes[i].name === "biaya428" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total72 += biaya;
            }
            if (checkboxes[i].name === "biaya429" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total72 += biaya;
            }
            if (checkboxes[i].name === "biaya430" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total72 += biaya;
            }
            if (checkboxes[i].name === "biaya431" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total72 += biaya;
            }
            if (checkboxes[i].name === "biaya432" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total72 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total72);
        document.getElementById("total72").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal73() {
        var checkboxes = document.getElementsByTagName("input");
        var total73 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya433" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total73 += biaya;
            }
            if (checkboxes[i].name === "biaya434" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total73 += biaya;
            }
            if (checkboxes[i].name === "biaya435" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total73 += biaya;
            }
            if (checkboxes[i].name === "biaya436" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total73 += biaya;
            }
            if (checkboxes[i].name === "biaya437" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total73 += biaya;
            }
            if (checkboxes[i].name === "biaya438" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total73 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total73);
        document.getElementById("total73").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal74() {
        var checkboxes = document.getElementsByTagName("input");
        var total74 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            
            if (checkboxes[i].name === "biaya439" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total74 += biaya;
            }
            if (checkboxes[i].name === "biaya440" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total74 += biaya;
            }
            if (checkboxes[i].name === "biaya441" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total74 += biaya;
            }
            if (checkboxes[i].name === "biaya442" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total74 += biaya;
            }
            if (checkboxes[i].name === "biaya443" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total74 += biaya;
            }
            if (checkboxes[i].name === "biaya444" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total74 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total74);
        document.getElementById("total74").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal75() {
        var checkboxes = document.getElementsByTagName("input");
        var total75 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya445" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total75 += biaya;
            }
            if (checkboxes[i].name === "biaya446" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total75 += biaya;
            }
            if (checkboxes[i].name === "biaya447" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total75 += biaya;
            }
            if (checkboxes[i].name === "biaya448" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total75 += biaya;
            }
            if (checkboxes[i].name === "biaya449" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total75 += biaya;
            }
            if (checkboxes[i].name === "biaya450" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total75 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total75);
        document.getElementById("total75").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal76() {
        var checkboxes = document.getElementsByTagName("input");
        var total76 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya451" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total76 += biaya;
            }
            if (checkboxes[i].name === "biaya452" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total76 += biaya;
            }
            if (checkboxes[i].name === "biaya453" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total76 += biaya;
            }
            if (checkboxes[i].name === "biaya454" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total76 += biaya;
            }
            if (checkboxes[i].name === "biaya455" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total76 += biaya;
            }
            if (checkboxes[i].name === "biaya456" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total76 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total76);
        document.getElementById("total76").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal77() {
        var checkboxes = document.getElementsByTagName("input");
        var total77 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya457" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total77 += biaya;
            }
            if (checkboxes[i].name === "biaya458" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total77 += biaya;
            }
            if (checkboxes[i].name === "biaya459" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total77 += biaya;
            }
            if (checkboxes[i].name === "biaya460" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total77 += biaya;
            }
            if (checkboxes[i].name === "biaya461" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total77 += biaya;
            }
            if (checkboxes[i].name === "biaya462" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total77 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total77);
        document.getElementById("total77").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal78() {
        var checkboxes = document.getElementsByTagName("input");
        var total78 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya463" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total78 += biaya;
            }
            if (checkboxes[i].name === "biaya464" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total78 += biaya;
            }
            if (checkboxes[i].name === "biaya465" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total78 += biaya;
            }
            if (checkboxes[i].name === "biaya466" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total78 += biaya;
            }
            if (checkboxes[i].name === "biaya467" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total78 += biaya;
            }
            if (checkboxes[i].name === "biaya468" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total78 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total78);
        document.getElementById("total78").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal79() {
        var checkboxes = document.getElementsByTagName("input");
        var total79 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya469" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total79 += biaya;
            }
            if (checkboxes[i].name === "biaya470" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total79 += biaya;
            }
            if (checkboxes[i].name === "biaya471" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total79 += biaya;
            }
            if (checkboxes[i].name === "biaya472" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total79 += biaya;
            }
            if (checkboxes[i].name === "biaya473" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total79 += biaya;
            }
            if (checkboxes[i].name === "biaya474" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total79 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total79);
        document.getElementById("total79").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal80() {
        var checkboxes = document.getElementsByTagName("input");
        var total80 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya475" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total80 += biaya;
            }
            if (checkboxes[i].name === "biaya476" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total80 += biaya;
            }
            if (checkboxes[i].name === "biaya477" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total80 += biaya;
            }
            if (checkboxes[i].name === "biaya478" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total80 += biaya;
            }
            if (checkboxes[i].name === "biaya479" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total80 += biaya;
            }
            if (checkboxes[i].name === "biaya480" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total80 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total80);
        document.getElementById("total80").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal81() {
        var checkboxes = document.getElementsByTagName("input");
        var total81 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya481" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total81 += biaya;
            }
            if (checkboxes[i].name === "biaya482" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total81 += biaya;
            }
            if (checkboxes[i].name === "biaya483" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total81 += biaya;
            }
            if (checkboxes[i].name === "biaya484" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total81 += biaya;
            }
            if (checkboxes[i].name === "biaya485" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total81 += biaya;
            }
            if (checkboxes[i].name === "biaya486" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total81 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total81);
        document.getElementById("total81").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal82() {
        var checkboxes = document.getElementsByTagName("input");
        var total82 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya487" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total82 += biaya;
            }
            if (checkboxes[i].name === "biaya488" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total82 += biaya;
            }
            if (checkboxes[i].name === "biaya489" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total82 += biaya;
            }
            if (checkboxes[i].name === "biaya490" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total82 += biaya;
            }
            if (checkboxes[i].name === "biaya491" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total82 += biaya;
            }
            if (checkboxes[i].name === "biaya492" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total82 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total82);
        document.getElementById("total82").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal83() {
        var checkboxes = document.getElementsByTagName("input");
        var total83 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya493" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total83 += biaya;
            }
            if (checkboxes[i].name === "biaya494" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total83 += biaya;
            }
            if (checkboxes[i].name === "biaya495" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total83 += biaya;
            }
            if (checkboxes[i].name === "biaya496" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total83 += biaya;
            }
            if (checkboxes[i].name === "biaya497" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total83 += biaya;
            }
            if (checkboxes[i].name === "biaya498" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total83 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total83);
        document.getElementById("total83").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function hitungTotal84() {
        var checkboxes = document.getElementsByTagName("input");
        var total84 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya499" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total84 += biaya;
            }
            if (checkboxes[i].name === "biaya500" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total84 += biaya;
            }
            if (checkboxes[i].name === "biaya501" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total84 += biaya;
            }
            if (checkboxes[i].name === "biaya502" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total84 += biaya;
            }
            if (checkboxes[i].name === "biaya503" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total84 += biaya;
            }
            if (checkboxes[i].name === "biaya504" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total84 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total84);
        document.getElementById("total84").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal85() {
        var checkboxes = document.getElementsByTagName("input");
        var total85 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya505" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total85 += biaya;
            }
            if (checkboxes[i].name === "biaya506" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total85 += biaya;
            }
            if (checkboxes[i].name === "biaya507" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total85 += biaya;
            }
            if (checkboxes[i].name === "biaya508" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total85 += biaya;
            }
            if (checkboxes[i].name === "biaya509" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total85 += biaya;
            }
            if (checkboxes[i].name === "biaya510" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total85 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total85);
        document.getElementById("total85").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal86() {
        var checkboxes = document.getElementsByTagName("input");
        var total86 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya511" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total86 += biaya;
            }
            if (checkboxes[i].name === "biaya512" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total86 += biaya;
            }
            if (checkboxes[i].name === "biaya513" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total86 += biaya;
            }
            if (checkboxes[i].name === "biaya514" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total86 += biaya;
            }
            if (checkboxes[i].name === "biaya515" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total86 += biaya;
            }
            if (checkboxes[i].name === "biaya516" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total86 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total86);
        document.getElementById("total86").innerHTML = "" + totalRupiah;
        calculateSum();
    }
    function hitungTotal87() {
        var checkboxes = document.getElementsByTagName("input");
        var total87 = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name === "biaya517" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total87 += biaya;
            }
            if (checkboxes[i].name === "biaya518" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total87 += biaya;
            }
            if (checkboxes[i].name === "biaya519" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total87 += biaya;
            }
            if (checkboxes[i].name === "biaya520" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total87 += biaya;
            }
            if (checkboxes[i].name === "biaya521" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total87 += biaya;
            }
            if (checkboxes[i].name === "biaya522" && checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                total87 += biaya;
            }
        }
        var totalRupiah = formatRupiah(total87);
        document.getElementById("total87").innerHTML = "" + totalRupiah;
        calculateSum();
    }

    function calculateSum() {
        var checkboxes = document.getElementsByTagName("input");
        var totalSum = 0;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                var biaya = parseInt(checkboxes[i].value);
                totalSum += biaya;
            }
        }

        totalSum -= 2; // Subtract 2 from totalSum //sementara hasil -2 xixixi

        var totalRupiah = formatRupiah(totalSum);

        document.getElementById("totalSum").innerHTML = "" + totalRupiah;
    }

</script>