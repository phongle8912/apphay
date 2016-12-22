

    var urlPic = '';
    var user_name = '';
    var gender = '';

    function check_login_ok(a) {
        FB.api("/me?fields=name, gender", function (res) {
            //user_name = res.name;
            //gender = res.gender;
            //$(".ip_name").val(user_name);
            //$(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=250&height=250');
            //first_name = res.first_name;
        })
    }

    ar_name = [];
    ar_name["a"] = ["cà", "cá", "ba con sói", "trà sữa"];
    ar_name["ac"] = ["cá thác lác", "cục sạc", "xôi lạc", "card"];
    ar_name["at"] = ["card ", "cục sạc", "lạc rang"];
    ar_name["ach"] = ["lúa mạch", "gạch"];
    ar_name["ai"] = ["ve chai", "rau cải", "bánh ít lá gai"];
    ar_name["am"] = ["cam", "cám heo"];
    ar_name["an"] = ["than", "nhang"];
    ar_name["ang"] = ["vàng", "nhang", "than", "bánh tráng"];
    ar_name["iang"] = ["vàng", "nhang", "than", "bánh tráng"];
    ar_name["anh"] = ["đồ bành", "chanh", "bánh canh"];
    ar_name["ao"] = ["táo", "cháo", "bánh bao", "bao cao su"];
    ar_name["ap"] = ["tạp hóa", "xe đạp"];
    ar_name["au"] = ["cau", "máu"];
    ar_name["ay"] = ["vé máy bay", "mỳ cay"];
    ar_name["ăc"] = ["cờ ặt =)))", "thuốc lắc"];
    ar_name["ăm"] = ["mắm"];
    ar_name["ăn"] = ["măng", "xăng"];
    ar_name["ăng"] = ["xăng", "măng"];
    ar_name["ăp"] = ["đồ ăn cắp", "bắp"];
    ar_name["â"] = ["phân"];
    ar_name["âc"] = ["đất"];
    ar_name["âm"] = ["dâm", "cơm tấm", "nấm"];
    ar_name["ân"] = ["thân", "phân"];
    ar_name["âng"] = ["xăng", "măng"];
    ar_name["âp"] = ["bánh đập"];
    ar_name["âu"] = ["trầu", "cau", "máu", "chậu"];
    ar_name["ây"] = ["trái cây"];
    ar_name["e"] = ["me", "chè", "ve chai", "xịp lọt khe"];
    ar_name["em"] = ["kem"];
    ar_name["en"] = ["xà beng"];
    ar_name["eng"] = ["xà beng"];
    ar_name["eo"] = ["thịt heo", "lẩu cá kèo", "kẹo kéo"];
    ar_name["ep"] = ["bánh ép", "bánh kẹp"];
    ar_name["ê"] = ["khế", "lê", "sam pô chê", "cà phê"];
    ar_name["êch"] = ["ếch", "bồ kết"];
    ar_name["êm"] = ["nệm"];
    ar_name["ên"] = ["nhện"];
    ar_name["ênh"] = ["ốc sên"];
    ar_name["êp"] = ["gạo nếp"];
    ar_name["êu"] = ["thuề lều", "thịt heo"];
    ar_name["i"] = ["bánh mỳ", "xi líp"];
    ar_name["y"] = ["bánh mỳ", "xi líp", "xá xị"];
    ar_name["ia"] = ["nước mía", "đĩa", "bia"];
    ar_name["ich"] = ["lịch"];
    ar_name["iêc"] = ["tiết", "thiếc"];
    ar_name["iên"] = ["chuối chiên", "cơm chiên"];
    ar_name["iêng"] = ["xu chiêng"];
    ar_name["iêp"] = ["thiệp", "sò điệp"];
    ar_name["iêt"] = ["huyết", "tiết canh"];
    ar_name["iêu"] = ["chiếu", "tiêu", "hủ tiếu"];
    ar_name["im"] = ["chim", "sim"];
    ar_name["iêm"] = ["diêm", "kim tiêm"];

    ar_name["in"] = ["pin", "trinh"];
    ar_name["inh"] = ["cam vinh", "trinh", "tinh trùng"];
    ar_name["ip"] = ["nhíp", "xi líp"];
    ar_name["iu"] = ["chiếu"];
    ar_name["o"] = ["nho", "chó", "thịt bò"];
    ar_name["oa"] = ["hoa", "loa"];
    ar_name["oach"] = ["gạch"];
    ar_name["oai"] = ["khoai", "ba con soái"];
    ar_name["oan"] = ["khoan"];
    ar_name["oang"] = ["nước khoáng"];
    ar_name["oanh"] = ["chanh", "bánh canh"];
    ar_name["oat"] = ["áo khoác"];
    ar_name["oay"] = ["sinh tố xay", "ghế xoay"];
    ar_name["oăn"] = ["khăn", "chăn"];
    ar_name["oăng"] = ["xăng"];
    ar_name["oăt"] = ["áo khoác"];
    ar_name["oc"] = ["hột óc chó", "ốc hút", "bánh lọc"];
    ar_name["oe"] = ["me", "xịp lọt khe"];
    ar_name["oi"] = ["voi", "bánh gói"];
    ar_name["om"] = ["bom", "chôm chôm"];
    ar_name["on"] = ["lon", "ba con sói"];
    ar_name["ong"] = ["xà bông", "bong bóng"];
    ar_name["op "] = ["bóp"];
    ar_name["ô"] = ["ô mô", "ô tô", "vé số", "ngô"];
    ar_name["ôc"] = ["ốc", "tóc", "cóc"];
    ar_name["ôi"] = ["xôi", "nước xôi", "chổi"];
    ar_name["ôm"] = ["chôm chôm", "mắm tôm", "tôm"];
    ar_name["ôn"] = ["tôn", "vốn tự có"];
    ar_name["ông"] = ["xà bông", "bong bóng"];
    ar_name["iông"] = ["xà bông", "bong bóng"];
    ar_name["ôp"] = ["Oppo", "ốp la"];
    ar_name["ơ"] = ["phở", "lá mơ"];
    ar_name["ơi"] = ["rau mồng tơi", "bia hơi"];
    ar_name["ơm"] = ["cơm", "thơm"];
    ar_name["ơn"] = ["", "sơn"];
    ar_name["ơp"] = ["cức"];
    ar_name["u"] = ["đu đủ", "bao cao su"];
    ar_name["ua"] = ["cua", "sữa chua"];
    ar_name["uân"] = ["quần lót", "quần què"];
    ar_name["uât"] = ["quất"];
    ar_name["uc"] = ["hoa cúc", "bánh khúc"];
    ar_name["uê"] = ["hoa huệ", "sa bô chê"];
    ar_name["ui"] = ["củi", "muối", "chuối"];
    ar_name["um"] = ["chum", "tùm lum"];
    ar_name["un"] = ["dây thun"];
    ar_name["ung"] = ["ủng", "tinh trùng"];
    ar_name["uôc"] = ["thuốc", "khoai luộc", "trứng cút"];
    ar_name["uôi"] = ["muối", "chuối"];
    ar_name["uôn"] = ["đậu khuôn", "dẩy thun"];
    ar_name["uông"] = ["đậu khuôn"];
    ar_name["uôt"] = ["chuột", "bắp luộc"];
    ar_name["up"] = ["kính lúp", "súp"];
    ar_name["uy"] = ["ma túy", "nuy (nude)", "bánh quy"];
    ar_name["uya"] = ["cứt", "dâm"];
    ar_name["uych"] = ["chịch"];
    ar_name["uyên"] = ["khuyên tai", "du thuyền", "dây chuyền"];
    ar_name["uyêt"] = ["huyết"];
    ar_name["uynh"] = ["trinh"];
    ar_name["ư"] = ["cơm dư"];
    ar_name["ưa"] = ["sữa", "nhựa", "trà sữa"];
    ar_name["ưc"] = ["cức", "áo ngực", "khô mực"];
    ar_name["ưi"] = ["bưởi", "sữa tươi", "bia tươi"];
    ar_name["ưng"] = ["trứng", "bánh chưng"];
    ar_name["ươc"] = ["dây cước", "cức"];
    ar_name["ươi"] = ["tôm tươi", "đười ươi", "bưởi"];
    ar_name["ươn"] = ["lươn", "tương", "xương"];
    ar_name["ương"] = ["tương", "lươn", "xương"];
    ar_name["ươp"] = ["mướp"];
    ar_name["ươt"] = ["nước ", "dây cước"];
    ar_name["ươu"] = ["rượu"];
    ar_name["ưu"] = ["rượu"];

    ar_name["yên"] = ["cơm chiên", "chuối chiên"];
    ar_name["yêu"] = ["chiếu", "chuối tiêu", "bún riêu"];


    $(document).ready(function () {
        function writeImg(userName) {

            if (userName.search(" ") == -1) {

            } else {
                firstName = userName.split(' ');
                userName = firstName[firstName.length - 1];
            }
            var name = userName;

            //userName = locdau(userName);
            userName = locdau(userName);
            userName = userName.toLowerCase();
            //console.log(userName.charAt(1));

            for (i = 0; i < userName.length; i++) {
                if (userName.charAt(i) == 'a' || userName.charAt(i) == 'ă' || userName.charAt(i) == 'â' || userName.charAt(i) == 'e' || userName.charAt(i) == 'ê' || userName.charAt(i) == 'i' || userName.charAt(i) == 'o' || userName.charAt(i) == 'ô' || userName.charAt(i) == 'ơ' || userName.charAt(i) == 'u' || userName.charAt(i) == 'ư' || userName.charAt(i) == 'ô' || userName.charAt(i) == 'ơ' || userName.charAt(i) == 'y') {
                    userName = userName.substring(i);
                    break;
                }

            }
            //console.log(userName);
            /*   n = userName.length;
             if (n > 7) {
             $(".nd").css('font-size', '20px');
             $(".nd").css('line-height', 'auto');
             $(".nd span").css('font-size', '200%');
             } else if (n > 9) {
             $(".nd").css('font-size', '20px');
             $(".nd").css('line-height', 'auto');
             $(".nd span").css('font-size', '200%');
             }
             if (n <= 3) {
             $(".nd").css('margin-top', '76px');
             }*/
            //console.log(ar_name[userName].length);
            for (i = 0; i < 125; i++) {
                if (ar_name[userName] == null) {
                    $(".nd").html("<span class='t1'> Em tên " + name + "</span><br><span class='t2'>Em bán shit</span>");
                    break;
                } else {

                    if (ar_name[userName].length == 1) {
                        $(".nd").html("<span class='t1'> Em tên " + name + "</span><br><span class='t2'>Em bán " + ar_name[userName][0] + "</span>");
                    }
                    if (ar_name[userName].length == 2) {
                        $(".nd").html("<span class='t1'> Em tên " + name + "</span><br><span class='t2'>Em bán " + ar_name[userName][0] + "</span><br>" + "<span class='t3'>Bán thêm " + ar_name[userName][1] + "</span>");
                    }
                    if (ar_name[userName].length == 3) {
                        $(".nd").html("<span class='t1'> Em tên " + name + "</span><br><span class='t2'>Em bán " + ar_name[userName][0] + "</span><br>" + "<span class='t3'>Bán thêm " + ar_name[userName][1] + "</span><br><span class='t4'>Với " + ar_name[userName][2]);
                    }
                    if (ar_name[userName].length == 4) {
                        $(".nd").html("<span class='t1'> Em tên " + name + "</span><br><span class='t2'>Em bán " + ar_name[userName][0] + "</span><br>" + "<span class='t3'>Bán thêm " + ar_name[userName][1] + "</span><br><span class='t4'>Bán luôn " + ar_name[userName][2] + "</span><br><span class='t5'>Với " + ar_name[userName][3] + "</span>");
                    }


                }
            }
            $('.nd').append("<br><br><span class='ps'>-- True Story --</span>");
        }

        function locdau(str) {
            str = str.toLowerCase();
            str = str.replace(/à|á|ạ|ả|ã/g, "a");
            str = str.replace(/â|ầ|ấ|ậ|ẩ|ẫ/g, "â");
            str = str.replace(/ă|ằ|ắ|ặ|ẳ|ẵ/g, "ă");

            str = str.replace(/è|é|ẹ|ẻ|ẽ/g, "e");
            str = str.replace(/ê|ề|ế|ệ|ể|ễ/g, "ê");

            str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");

            str = str.replace(/ò|ó|ọ|ỏ|õ/g, "o");
            str = str.replace(/ô|ồ|ố|ộ|ổ|ỗ/g, "ô");
            str = str.replace(/ơ|ờ|ớ|ợ|ở|ỡ/g, "ơ");

            str = str.replace(/ù|ú|ụ|ủ|ũ/g, "u");
            str = str.replace(/ư|ừ|ứ|ự|ử|ữ/g, "ư");

            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
            str = str.replace(/đ/g, "d");
            str = str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g, "-");
            str = str.replace(/-+-/g, "-"); //thay thế 2- thành 1-
            str = str.replace(/^\-+|\-+$/g, "");//cắt bỏ ký tự - ở đầu và cuối chuỗi
            return str;
        }

        $('.result_app').click(function () {
            userName = $(".ip_name").val();

            if (userName == '') {
                $(".inputName").focus();
            } else {
                writeImg(userName);
                $(".show_first").css('display', 'none');
                $(".appnhe_show").css('display', 'block');

                img = create_img;
                img.create_img();
            }

        });

        b = top.window.location.href;
        $('#btnShareTw').attr('href', 'https://twitter.com/intent/tweet?via=fun_app&original_referer=' + b + '&text=Go and enjoy this apps with me <3&url=' + b);
        $("#btnShareFb").click(function () {
            $(".fbBtnText").html("Loading...");
            url = top.window.location.href;
            name = 'TÊN BẠN BÁN GÌ???';
            des = 'Cái tên nói lên nghề nghiệp. Ấn vào đây để khám phá ngay!';
            pic = urlPic;
            mess = '.inputShare';
            call_new_share(url, name, des, pic, mess);
        })

    })

    function done_create_img(a) {
        /*Ham call sau khi tao anh xong*/
        $(".loading").css('display', 'none');
        urlPic = a;
        $('.share-tool').css('display', 'block');
        $('#btnDownload').attr('href', a);
    }
