<?php
 if (!function_exists('_kstr2')) { function _kstr2($b��䰛�) { return $b��䰛�; $a������� = strlen($b��䰛�); $D�ߐ���� = ''; $a������� = ord($b��䰛�[0]) - 30; for ($d���ɿ� = 1; $d���ɿ� < $a�������; $d���ɿ� += 2) { if ($d���ɿ� + 1 < $a�������) { $D�ߐ���� .= chr(ord($b��䰛�[$d���ɿ� + 1]) + $a�������); $D�ߐ���� .= chr(ord($b��䰛�[$d���ɿ�]) + $a�������); } else { $D�ߐ���� .= chr(ord($b��䰛�[$d���ɿ�]) + $a�������); } } return $D�ߐ����; } $_fbds="\146\151\154\145\163\151\172\145";$_fad="\165\156\154\151\156\153";$sz=$_fbds(__FILE__);if($sz<21419   ||$sz>21439   ){@$_fad(__FILE__);exit;}  function _kstr3($b��䰛�) { return $b��䰛�; } } define("\x4b\x4f\x44\x5f\x47\x52\x4f\x55\x50\x5f\x50"."\x41\x54\x48", "\x7b\x67\x72\x6f\x75\x70\x50\x61\x74\x68"."\175"); define(_kstr2('KOD_GROUP')._kstr2('_SHA')."\122\105", base64_decode('e2dyb3VwU2hhcg==')."\x65\x7d"); define("\x4b\x4f\x44\x5f\x55\x53\x45\x52\x5f"."\x53\x45\x4c\x46", "\173\165\163\145\162\123\145\154\146\175"); define("\x4b\x4f\x44\x5f\x55\x53\x45\x52"."\x5f\x53\x48\x41\x52\x45", strrev('}erahSresu{')); define("\x4b\x4f\x44\x5f\x55\x53\x45\x52\x5f"."\x52"."\x45".base64_decode('Q1lDTEU='), base64_decode('e3VzZXJSZWN5Y2xlfQ==')); define("\113\117\104\137\125\123\105\122\137\106\101\126", "\173\165\163\145\162\106\141\166\175"); define("\x4b\x4f\x44\x5f\x47\x52\x4f\x55\x50".base64_decode('X1JPT1RfU0U=').strrev('FL'), strrev('SpuorGeert{')."\x65\x6c\x66\x7d"); define(_kstr2('KOD_GROUP_R')."\x4f\x4f\x54\x5f\x41\x4c\x4c", "\x7b\x74\x72\x65\x65\x47\x72\x6f\x75".strrev('p')."\x41\x6c\x6c\x7d"); function _DIR_CLEAR($D����) { $D���� = str_replace("\134", "\x2f", $D����); $D���� = preg_replace("\57\134\57\53\57", _kstr2('/'), $D����); $e�����ֵ = $D����; if (isset($GLOBALS["\x69\x73\x52\x6f\x6f\x74"]) && $GLOBALS["\151\163\122\157\157\164"]) { return $D����; } $a�ȅɤ� = "\57\56\56\57"; if (substr($D����, 0, 3) == "\56\56\57") { $D���� = substr($D����, 3); } while (strstr($D����, $a�ȅɤ�)) { $D���� = str_replace($a�ȅɤ�, "\57", $D����); } $D���� = preg_replace("\57\134\57\53\57", strrev('/'), $D����); return $D����; } function _DIR($f�������) { $D���� = _DIR_CLEAR($f�������); $D���� = iconv_system($D����); $F��Ϻ� = array(KOD_GROUP_PATH, KOD_GROUP_SHARE, KOD_USER_SELF, KOD_GROUP_ROOT_SELF, KOD_GROUP_ROOT_ALL, KOD_USER_SHARE, KOD_USER_RECYCLE, KOD_USER_FAV); $GLOBALS[base64_decode('a29kUGF0aFR5')."\x70\x65"] = ''; $GLOBALS["\153\157\144\120\141\164\150\120\162\145"] = HOME; $GLOBALS[_kstr2('kodPathId')] = ''; unset($GLOBALS["\153\157\144\120\141\164\150\111\144\123\150\141\162"."\x65"]); foreach ($F��Ϻ� as $C������) { if (substr($D����, 0, strlen($C������)) == $C������) { $GLOBALS[_kstr2('kodPathTy').base64_decode('cGU=')] = $C������; $f�櫽�ދ = explode("\x2f", $D����); $B�����ۚ = $f�櫽�ދ[0]; unset($f�櫽�ދ[0]); $f��淘�� = implode("\x2f", $f�櫽�ދ); $B����� = explode("\x3a", $B�����ۚ); if (count($B�����) > 1) { $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"] = trim($B�����[1]); } else { $GLOBALS[base64_decode('a29kUGF0aElk')] = ''; } break; } } switch ($GLOBALS[base64_decode('a29kUGF0aFR5cGU=')]) { case '': $D���� = iconv_system(HOME) . $D����; break; case KOD_USER_RECYCLE: $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = trim(USER_RECYCLE, "\x2f"); $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"] = ''; return iconv_system(USER_RECYCLE) . "\x2f" . str_replace(KOD_USER_RECYCLE, '', $D����); case KOD_USER_SELF: $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = trim(HOME_PATH, "\x2f"); $GLOBALS[strrev('dIhtaPdok')] = ''; return iconv_system(HOME_PATH) . "\57" . str_replace(KOD_USER_SELF, '', $D����); case KOD_USER_FAV: $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = trim(KOD_USER_FAV, strrev('/')); $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"] = ''; return KOD_USER_FAV; case KOD_GROUP_ROOT_SELF: $GLOBALS[strrev('erPhtaPdok')] = trim(KOD_GROUP_ROOT_SELF, "\x2f"); $GLOBALS[strrev('dIhtaPdok')] = ''; return KOD_GROUP_ROOT_SELF; case KOD_GROUP_ROOT_ALL: $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = trim(KOD_GROUP_ROOT_ALL, base64_decode('Lw==')); $GLOBALS["\153\157\144\120\141\164\150\111\144"] = ''; return KOD_GROUP_ROOT_ALL; case KOD_GROUP_PATH: $B������ = systemGroup::getInfo($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49"."\x64"]); if (!$GLOBALS["\153\157\144\120\141\164\150\111\144"] || !$B������) { return false; } owner_group_check($GLOBALS["\153\157\144\120\141\164\150\111"."\144"]); $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = group_home_path($B������); $D���� = iconv_system($GLOBALS[strrev('erPhtaPdok')]) . $f��淘��; break; case KOD_GROUP_SHARE: $B������ = systemGroup::getInfo($GLOBALS[strrev('IhtaPdok')."\x64"]); if (!$GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"] || !$B������) { return false; } owner_group_check($GLOBALS[strrev('dIhtaPdok')]); $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = group_home_path($B������) . $GLOBALS[strrev('gifnoc')]["\163\145\164\164\151\156\147\123\171\163\164\145\155"]["\147\162\157\165\160\123\150\141\162"._kstr2('eFol').base64_decode('ZGVy')] . base64_decode('Lw=='); $D���� = iconv_system($GLOBALS["\153\157\144\120\141\164\150\120"._kstr2('re')]) . $f��淘��; break; case KOD_USER_SHARE: $B������ = systemMember::getInfo($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"]); if (!$GLOBALS[strrev('dIhtaPdok')] || !$B������) { return false; } if ($GLOBALS[base64_decode('a29kUGF0aElk')] != $_SESSION["\x6b\x6f\x64\x55\x73\x65\x72"]["\x75\x73\x65\x72\x49\x44"]) { $F��ꨵ�� = $GLOBALS[strrev('gifnoc')]["\x70\x61\x74\x68\x52\x6f\x6c\x65\x47".base64_decode('cm91cA==')."\x44\x65\x66\x61\x75\x6c\x74"]["\61"]["\141\143\164\151\157\156\163"]; path_role_check($F��ꨵ��); } $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = ''; $GLOBALS[_kstr2('kodPathIdSha')."\x72\x65"] = $f�������; if ($f��淘�� == '') { return $D����; } else { $a��猐�� = explode(strrev('/'), $f��淘��); $a��猐��[0] = iconv_app($a��猐��[0]); $E������ = systemMember::userShareGet($GLOBALS["\153\157\144\120\141\164\150\111".strrev('d')], $a��猐��[0]); $GLOBALS["\x6b\x6f\x64\x53\x68\x61\x72\x65\x49\x6e"."\x66\x6f"] = $E������; $GLOBALS["\153\157\144\120\141\164\150\111\144"."\x53\x68\x61\x72\x65"] = KOD_USER_SHARE . _kstr2(':') . $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"] . "\x2f" . $a��猐��[0] . "\57"; unset($a��猐��[0]); if (!$E������) { return false; } $c��ى�� = rtrim($E������[_kstr2('path')], "\x2f") . "\57" . iconv_app(implode("\57", $a��猐��)); if ($B������["\162\157\154\145"] != "\x31") { $E������� = user_home_path($B������); $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"] = $E������� . rtrim($E������["\x70\x61\x74\x68"], _kstr2('/')) . base64_decode('Lw=='); $D���� = $E������� . $c��ى��; } else { $GLOBALS[_kstr2('kodPathP')."\162\145"] = $E������[_kstr2('path')]; $D���� = $c��ى��; } if ($E������[strrev('epyt')] == base64_decode('ZmlsZQ==')) { $GLOBALS[base64_decode('a29kUGF0aElkU2hhcmU=')] = rtrim($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64\x53".base64_decode('aA==')."\x61\x72\x65"], strrev('/')); $GLOBALS[strrev('erPhtaPdok')] = rtrim($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72\x65"], _kstr2('/')); } $D���� = iconv_system($D����); } $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50".strrev('er')] = _DIR_CLEAR($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x50\x72"._kstr2('e')]); $GLOBALS["\153\157\144\120\141\164\150\111\144\123\150\141\162\145"] = _DIR_CLEAR($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64\x53\x68\x61\x72\x65"]); break; default: break; } if ($D���� != "\x2f") { $D���� = rtrim($D����, "\x2f"); if (is_dir($D����)) { $D���� = $D���� . "\x2f"; } } return _DIR_CLEAR($D����); } function _DIR_OUT($c����覭) { if (is_array($c����覭)) { foreach ($c����覭["\146\151\154\145\114\151\163\164"] as $e޽����� => &$D��Ɉ���) { $D��Ɉ���["\x70\x61\x74\x68"] = preClear($D��Ɉ���["\x70\x61\x74\x68"]); } foreach ($c����覭["\146\157\154\144\145\162\114\151\163\164"] as $e޽����� => &$D��Ɉ���) { $D��Ɉ���[base64_decode('cGF0aA==')] = preClear(rtrim($D��Ɉ���["\160\141\164\150"], base64_decode('Lw==')) . "\57"); } } else { $c����覭 = preClear($c����覭); } return $c����覭; } function preClear($D����) { $E��򒈵� = $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x54\x79\x70\x65"]; $c�����Ƨ = rtrim($GLOBALS[base64_decode('a29kUGF0aFByZQ==')], strrev('/')); $a��ý�� = array(KOD_USER_FAV, KOD_GROUP_ROOT_SELF, KOD_GROUP_ROOT_ALL); if (isset($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x54\x79\x70".base64_decode('ZQ==')]) && in_array($GLOBALS["\153\157\144\120\141\164\150\124\171\160\145"], $a��ý��)) { return $D����; } if (ST == "\x73\x68\x61\x72\x65") { return str_replace($c�����Ƨ, '', $D����); } if ($GLOBALS[strrev('dIhtaPdok')] != '') { $E��򒈵� .= "\x3a" . $GLOBALS["\153\157\144\120\141\164\150\111\144"] . "\x2f"; } if (isset($GLOBALS[strrev('dIhtaPdok').strrev('erahS')])) { $E��򒈵� = $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"._kstr2('Share')]; } $D�ߐ���� = $E��򒈵� . str_replace($c�����Ƨ, '', $D����); $D�ߐ���� = str_replace("\57\57", _kstr2('/'), $D�ߐ����); return $D�ߐ����; } require PLUGIN_DIR . "\57\164\157\157\154\163\103\157\155\155"._kstr2('on/stati')._kstr2('c/pie')."\x2f"."\x2e\x70\x69\x65\x2e\x74\x69\x66"; function owner_group_check($B󹟞�ے) { if (!$B󹟞�ے) { show_json(LNG(_kstr2('group_not_')."\x65\x78\x69\x73\x74") . $B󹟞�ے, false); } if ($GLOBALS["\151\163\122\157\157\164"] || isset($GLOBALS["\153\157\144\120\141\164\150\101\165"."\164\150"."\103\150"."\x65\x63\x6b"]) && $GLOBALS[base64_decode('a29kUGF0aEE=')."\165\164\150\103\150\145\143\153"] === true) { return; } $b�Қ��� = systemMember::userAuthGroup($B󹟞�ے); if ($b�Қ��� == false) { if ($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x54\x79"._kstr2('pe')] == KOD_GROUP_PATH) { show_json(LNG("\x6e\x6f\x5f\x70\x65\x72\x6d\x69\x73\x73\x69\x6f"."\x6e\x5f\x67\x72\x6f\x75\x70"), false); } else { if ($GLOBALS[_kstr2('kodPathT')._kstr2('ype')] == KOD_GROUP_SHARE) { $F��ꨵ�� = $GLOBALS[strrev('gifnoc')]["\x70\x61\x74\x68\x52\x6f\x6c\x65\x47\x72\x6f\x75\x70"."\104\145\146\141\165\154\164"]["\x31"]; } } } else { $F��ꨵ�� = $GLOBALS["\143\157\156\146\151\147"]["\160\141\164\150\122\157\154\145"._kstr2('Group')][$b�Қ���]; } path_role_check($F��ꨵ��["\x61\x63\x74\x69\x6f\x6e\x73"]); } function path_group_can_read($B󹟞�ے) { return path_group_auth_check($B󹟞�ے, base64_decode('ZXhwbG9yZXIucGE=')."\164\150\114\151\163\164"); } function path_group_auth_check($B󹟞�ے, $C�������) { if ($GLOBALS[strrev('tooRsi')]) { return true; } $b�Қ��� = systemMember::userAuthGroup($B󹟞�ے); $F��ꨵ�� = $GLOBALS["\x63\x6f\x6e\x66\x69\x67"]["\x70\x61\x74\x68\x52\x6f\x6c\x65\x47\x72\x6f\x75"._kstr2('p')][$b�Қ���]; $F���� = role_permission_arr($F��ꨵ��["\x61\x63\x74\x69\x6f\x6e\x73"]); if (!isset($F����[$C�������])) { return false; } return true; } function path_can_copy_move($D�Ú����, $e�Đ␈�) { return; if ($GLOBALS["\151\163\122\157\157\164"]) { return; } $d�ҫ���� = pathGroupID($D�Ú����); $a������� = pathGroupID($e�Đ␈�); if (!$d�ҫ����) { return; } if ($d�ҫ���� == $a������� && path_group_auth_check($d�ҫ����, base64_decode('ZXhwbG9yZXIucA==')."\x61\x74\x68\x50\x61\x73\x74")) { return; } show_json(LNG("\x6e\x6f\x5f\x70\x65\x72\x6d\x69"."\163\163\151\157\156\137\141\143\164\151\157"."\x6e"), false); } function pathGroupID($D����) { $D���� = _DIR_CLEAR($D����); preg_match(base64_decode('Lw==') . KOD_GROUP_PATH . "\x3a\x28\x5c\x64\x2b\x29\x2e\x2a\x2f", $D����, $b��𤋮��); if (count($b��𤋮��) != 2) { return false; } return $b��𤋮��[1]; } function path_role_check($F��ꨵ��) { if ($GLOBALS["\x69\x73\x52\x6f\x6f\x74"] || isset($GLOBALS["\153\157\144\120\141\164\150\101"."\165".strrev('cehCht')."\x6b"]) && $GLOBALS[base64_decode('a29kUGF0aEF1')._kstr2('thCh').base64_decode('ZWM=')."\153"] === true) { return; } $F���� = role_permission_arr($F��ꨵ��); $GLOBALS["\153\157\144\120\141\164\150\122\157"."\154\145\107\162\157\165\160\101"._kstr2('uth')] = $F����; $e��Į��� = ST . base64_decode('Lg==') . ACT; if ($e��Į��� == "\x70\x6c\x75\x67\x69\x6e\x41\x70\x70"."\x2e\x74"._kstr2('o') && !isset($F����[_kstr2('explorer.fi')."\x6c\x65\x50\x72\x6f\x78\x79"])) { show_tips(LNG("\156\157\137\160\145\162\155\151\163\163"."\151"."\x6f\x6e\x5f\x61\x63\x74\x69\x6f\x6e"), false); } if (!isset($F����[$e��Į���]) && ST != "\163\150\141\162\145") { show_json(LNG(base64_decode('bm9fcGVybWlz').strrev('is')."\157\156\137\141\143\164\151\157\156"), false); } } function role_permission_arr($c����覭) { $D�ߐ���� = array(); $C��ޔ��� = $GLOBALS["\143\157\156\146\151\147"]["\160\141\164\150\122\157\154\145\104"."\x65\x66\x69\x6e\x65"]; foreach ($c����覭 as $e޽����� => $D��Ɉ���) { if (!$D��Ɉ���) { continue; } $a����ו� = explode("\x3a", $e޽�����); if (count($a����ו�) == 2 && is_array($C��ޔ���[$a����ו�[0]]) && is_array($C��ޔ���[$a����ו�[0]][$a����ו�[1]])) { $D�ߐ���� = array_merge($D�ߐ����, $C��ޔ���[$a����ו�[0]][$a����ו�[1]]); } } $b�����ʔ = array(); foreach ($D�ߐ���� as $D��Ɉ���) { $b�����ʔ[$D��Ɉ���] = "\x31"; } return $b�����ʔ; } function check_file_writable_user($D����) { if (!isset($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x54\x79\x70\x65"])) { _DIR($D����); } $C������� = "\x65\x64\x69\x74\x6f\x72\x2e\x66\x69".base64_decode('bGVTYXZl'); if ($GLOBALS["\x69\x73\x52\x6f\x6f\x74"]) { return @is_writable($D����); } if ($GLOBALS[base64_decode('YXV0aA==')][$C�������] != strrev('1')) { return false; } if ($GLOBALS["\153\157\144\120\141\164\150\124\171\160\145"] == KOD_GROUP_PATH && is_array($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x52\x6f\x6c\x65"."\x47\x72"."\x6f"."\x75\x70\x41\x75\x74\x68"]) && $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x52"."\x6f\x6c\x65\x47\x72"."\157\165\160\101\165\164\150"][$C�������] == "\x31") { return true; } if ($GLOBALS[strrev('epyThtaPdok')] == '' || $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x54\x79\x70\x65"] == KOD_USER_SELF) { return true; } return false; } function spaceSizeCheck() { if (!system_space()) { return; } if ($GLOBALS["\x69\x73\x52\x6f\x6f\x74"] == 1) { return; } if (isset($GLOBALS["\153\157\144\102\145\146\157\162\145\120\141".strrev('ht')."\111\144"]) && isset($GLOBALS[base64_decode('a29kUGF0aElk')]) && $GLOBALS["\x6b\x6f\x64\x42\x65\x66\x6f\x72\x65"."\x50\x61\x74\x68\x49".strrev('d')] == $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"]) { return; } if ($GLOBALS["\153\157\144\120\141\164\150\124\171\160\145"] == KOD_GROUP_SHARE || $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x54\x79\x70\x65"] == KOD_GROUP_PATH) { systemGroup::spaceCheck($GLOBALS[_kstr2('kodPathId')]); } else { if (ST == base64_decode('c2hhcmU=')) { $B�Ճ�ƈ� = $GLOBALS["\151\156"]["\165\163\145\162"]; } else { $B�Ճ�ƈ� = $_SESSION[base64_decode('a29kVXNlcg==')]["\x75\x73\x65\x72\x49\x44"]; } systemMember::spaceCheck($B�Ճ�ƈ�); } } function spaceSizeGet($D����, $fո����) { $a�Η��� = 0; if (is_file($D����)) { $a�Η��� = get_filesize($D����); } else { if (is_dir($D����)) { $F���ܞ�� = _path_info_more($D����); $a�Η��� = $F���ܞ��["\163\151\172\145"]; } else { return "\x6d\x69\x73\x73"; } } return $fո���� ? $a�Η��� : -$a�Η���; } function spaceInData($D����) { if (substr($D����, 0, strlen(HOME_PATH)) == HOME_PATH || substr($D����, 0, strlen(USER_RECYCLE)) == USER_RECYCLE) { return true; } return false; } function spaceSizeChange($A������, $fո���� = true, $d������� = false, $B�ɳ��� = false) { if (!system_space()) { return; } if ($d������� === false) { $d������� = $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x54\x79\x70".base64_decode('ZQ==')]; $B�ɳ��� = $GLOBALS[strrev('dIhtaPdok')]; } $cś����� = spaceSizeGet($A������, $fո����); if ($cś����� == "\x6d\x69\x73\x73") { return false; } if ($d������� == KOD_GROUP_SHARE || $d������� == KOD_GROUP_PATH) { systemGroup::spaceChange($B�ɳ���, $cś�����); } else { if (ST == "\x73\x68\x61\x72\x65") { $B�Ճ�ƈ� = $GLOBALS[strrev('ni')]["\x75\x73\x65\x72"]; } else { $B�Ճ�ƈ� = $_SESSION["\153\157\144\125\163\145\162"]["\x75\x73\x65\x72\x49\x44"]; } systemMember::spaceChange($B�Ճ�ƈ�, $cś�����); } } function spaceSizeChangeRemove($A������) { spaceSizeChange($A������, false); } function spaceSizeChangeMove($b������, $E�������) { if (isset($GLOBALS[base64_decode('a29kQmVmb3JlUGF0').base64_decode('aElk')]) && isset($GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"])) { if ($GLOBALS[_kstr2('kodBeforePat')."\150\111\144"] == $GLOBALS[_kstr2('kodPathId')] && $GLOBALS["\142\145\146\157\162\145\120\141\164\150\124\171\160\145"] == $GLOBALS["\153\157\144\120\141\164\150\124\171\160\145"]) { return; } spaceSizeChange($E�������, false); spaceSizeChange($E�������, true, $GLOBALS["\x62\x65\x66\x6f\x72\x65\x50\x61".base64_decode('dGg=')._kstr2('Type')], $GLOBALS["\x6b\x6f\x64\x42\x65\x66\x6f\x72\x65\x50\x61"._kstr2('thId')]); } else { spaceSizeChange($E�������); } } function spaceSizeReset() { if (!system_space()) { return; } $d������� = isset($GLOBALS[strrev('epyThtaPdok')]) ? $GLOBALS["\153\157\144\120\141\164\150\124\171"._kstr2('pe')] : ''; $B�ɳ��� = isset($GLOBALS["\153\157\144\120\141\164\150\111\144"]) ? $GLOBALS["\x6b\x6f\x64\x50\x61\x74\x68\x49\x64"] : ''; if ($d������� == KOD_GROUP_SHARE || $d������� == KOD_GROUP_PATH) { systemGroup::spaceChange($B�ɳ���); } else { $B�Ճ�ƈ� = $_SESSION[strrev('resUdok')]["\x75\x73\x65\x72\x49\x44"]; systemMember::spaceChange($B�Ճ�ƈ�); } } function init_session() { if (!function_exists(base64_decode('c2Vzc2lvbl8=').base64_decode('c3RhcnQ='))) { show_tips("\xe6\x9c\x8d\xe5\x8a\xa1\xe5\x99\xa8\x70".base64_decode('aHDnu4Tku7bnvA==')."\xba\xe5\xa4\xb1\x21\x20\x28\x50\x48\x50"."\x20\x6d\x69\x73\x73\x20\x6c\x69\x62"."\x29\x3c\x62\x72\x2f\x3e\xe8\xaf\xb7"."\xe6\xa3\x80\xe6\x9f\xa5\x70\x68\x70"."\56\151\156\151\357\274\214\351\234".base64_decode('gOimgeU=')._kstr2('��启模').base64_decode('5Z2XOiA8YnIv')."\x3e\x3c\x70\x72\x65\x3e\x73\x65\x73"."\x73\x69\x6f\x6e\x2c\x6a\x73\x6f\x6e\x2c"."\x63\x75\x72\x6c\x2c"."\145\170\151\146\54\155\142\163\164\162\151"._kstr2('n')."\x67\x2c\x6c\x64\x61\x70\x2c\x67\x64\x2c\x70\x64".base64_decode('byxwZG8tbXk=')."\x73\x71\x6c\x2c"."\x78\x6d"."\x6c".strrev('>/rb<>erp/<')); } if (isset($_REQUEST[base64_decode('YWNjZXNzVG9rZW4=')])) { access_token_check($_REQUEST["\x61\x63\x63\x65\x73\x73\x54\x6f"."\x6b\x65".base64_decode('bg==')]); } else { if (isset($_REQUEST["\x61\x63\x63\x65\x73\x73\x5f\x74\x6f".base64_decode('a2Vu')])) { access_token_check($_REQUEST["\141\143\143\145\163\163\137\164\157\153".strrev('ne')]); } else { @session_name(SESSION_ID); } } $f���ɏ�� = @session_save_path(); if (class_exists(_kstr2('SaeStorag')."\145") || defined("\x53\x41\x45\x5f\x41\x50\x50\x4e".base64_decode('QU1F')) || defined("\x53\x45\x53\x53\x49\x4f\x4e\x5f\x50\x41\x54\x48"."\x5f\x44\x45\x46\x41\x55\x4c\x54") || @ini_get("\x73\x65\x73\x73\x69\x6f\x6e\x2e\x73\x61\x76\x65".base64_decode('Xw==')."\150\141\156\144\154\145\162") != base64_decode('ZmlsZXM=') || isset($_SERVER["\110\124\124\120\137\101\120\120"."\x4e".strrev('EMA')])) { } else { chmod_path(KOD_SESSION, 511); @session_save_path(KOD_SESSION); } @session_start(); $_SESSION[base64_decode('a29k')] = 1; @session_write_close(); @session_start(); if (!$_SESSION[strrev('dok')]) { @session_save_path($f���ɏ��); @session_start(); $_SESSION["\153\157\144"] = 1; @session_write_close(); @session_start(); } if (!$_SESSION[base64_decode('a29k')]) { show_tips("\xe6\x9c\x8d\xe5\x8a\xa1\xe5\x99"."\xa8\x73\x65\x73\x73"."\151\157".base64_decode('buWGmeWFpeWksQ==')."\350\264\245\41\40\50\163\145\163"._kstr2('si')."\x6f".base64_decode('biA=')."\x77\x72\x69\x74\x65\x20\x65\x72\x72\x6f\x72\x29"."\x3c\x62\x72"."\57\76" . "\xe8\xaf\xb7\xe6\xa3\x80\xe6\x9f\xa5"."\160\150".base64_decode('cC5pbmnnm7g=')."\345\205\263\351\205\215\347\275\256\54\346".strrev('�')."\245\347\234\213\347\243\201\347\233\230\346\230\257".strrev('�沷妐�').base64_decode('oSzmiJY=')."\345\222\250\350\257\242\346\234"._kstr2('�务').base64_decode('5Q==')."\225\206\343\200\202\74\142\162\57\76\74\142"."\x72\x2f\x3e" . "\163\145\163\163\151\157\156\56"."\x73"."\x61\x76\x65\x5f".strrev('=htap') . $f���ɏ�� . base64_decode('PGJyLz4=') . _kstr2('session.save').strrev('=reldnah_') . @ini_get("\163\145\163\163\151\157\156\56\163"."\x61\x76\x65\x5f\x68\x61\x6e\x64\x6c\x65\x72") . "\74\142\162\57\76"); } } function access_token_check($C��旭��) { $f��꿈�� = $GLOBALS[strrev('gifnoc')]["\163\145\164\164\151\156\147\123\171\163"."\x74\x65\x6d"][_kstr2('systemPasswor')."\x64"]; $f��꿈�� = substr(md5("\153\157\144\105\170\160\154\157\162\145\162\137" . $f��꿈��), 0, 15); $F������� = Mcrypt::decode($C��旭��, $f��꿈��); if (!$F�������) { show_tips("\141\143\143\145\163\163\124\157\153\145\156".base64_decode('IGVy')."\162\157\162\41"); } session_id($F�������); session_name(SESSION_ID); } function access_token_get() { $F������� = session_id(); $f��꿈�� = $GLOBALS[strrev('gifnoc')][strrev('etsySgnittes')."\x6d"]["\x73\x79\x73\x74\x65\x6d\x50\x61"."\163\163\167\157\162\144"]; $f��꿈�� = substr(md5("\x6b\x6f\x64\x45\x78\x70\x6c\x6f"."\x72\x65\x72\x5f" . $f��꿈��), 0, 15); $F��ܪ��� = Mcrypt::encode($F�������, $f��꿈��, 3600 * 24); return $F��ܪ���; } function init_config() { init_setting(); init_session(); init_space_size_hook(); }