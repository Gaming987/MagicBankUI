<?php
/**
 * ███╗░░░███╗░█████╗░░██████╗░██╗░█████╗░░██████╗░░█████╗░███╗░░░███╗███████╗░██████╗
 * ████╗░████║██╔══██╗██╔════╝░██║██╔══██╗██╔════╝░██╔══██╗████╗░████║██╔════╝██╔════╝
 * ██╔████╔██║███████║██║░░██╗░██║██║░░╚═╝██║░░██╗░███████║██╔████╔██║█████╗░░╚█████╗░
 * ██║╚██╔╝██║██╔══██║██║░░╚██╗██║██║░░██╗██║░░╚██╗██╔══██║██║╚██╔╝██║██╔══╝░░░╚═══██╗
 * ██║░╚═╝░██║██║░░██║╚██████╔╝██║╚█████╔╝╚██████╔╝██║░░██║██║░╚═╝░██║███████╗██████╔╝
 * ╚═╝░░░░░╚═╝╚═╝░░╚═╝░╚═════╝░╚═╝░╚════╝░░╚═════╝░╚═╝░░╚═╝╚═╝░░░░░╚═╝╚══════╝╚═════╝░
 * Auto Generated on: 29 May 2022, 12:48:13 AM - UTC
 * 
 *    Copyright 2022 MagicGames
 *    Licensed under the Apache License, Version 2.0 (the 'License');
 *    you may not use this file except in compliance with the License.
 *    You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 *    Unless required by applicable law or agreed to in writing, software
 *    distributed under the License is distributed on an 'AS IS' BASIS,
 *    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *    See the License for the specific language governing permissions and
 *    limitations under the License.
 * 
 * 
 * This is a project from MagicGames. Obfuscated with YAK Pro with multiple modifications.
 * Other projects by MagicGames can be found on our GitHub organisation.
 * No support will be provided.
 * 
 * GitHub: https://github.com/MagicGames-Network
 * Discord: https://discord.gg/32xh5mqe7F
 */
 namespace AGTHARN\BankUI\form; use AGTHARN\BankUI\Main; use pocketmine\player\Player; use AGTHARN\BankUI\bank\Banks; use jojoe77777\FormAPI\CustomForm; use jojoe77777\FormAPI\SimpleForm; use onebone\economyapi\EconomyAPI; class DepositForm { public static function depositForm(Player $ce8df0428c0d5fc2c96cece4d007) : SimpleForm { goto DujbVVbsILn5cXm8XMErFZfaRcWc5d0b789aad44b947ae5a7cc74b8; DObWagMpzAaric9IPppSuvdzjRqxb0b88ed624990c6b1975dca1359: $A2c3274e176f4739b0167934ac66->addButton("\302\247\66\xc2\xbb\40\xc2\247\141\104\x65\160\157\163\x69\x74\40\103\165\x73\x74\157\x6d\x20\302\247\66\xc2\xab\12\xc2\xa7\x38\x44\x65\x70\x6f\x73\151\x74\40\x41\156\x79", 1, "\150\x74\164\x70\163\x3a\57\57\143\x64\x6e\55\151\x63\x6f\x6e\x73\x2d\x70\156\147\x2e\x66\154\x61\x74\151\143\157\156\x2e\143\157\155\57\61\x32\70\x2f\x31\60\x34\61\57\61\x30\64\x31\x38\x38\x38\56\160\x6e\x67"); $A2c3274e176f4739b0167934ac66->addButton("\302\247\66\xc2\247\154\102\x41\103\x4b\xa\xc2\247\162\302\247\70\x54\x61\x70\x20\x74\x6f\x20\x67\x6f\x20\142\x61\143\153", 0, "\x74\x65\170\164\165\x72\x65\x73\x2f\165\151\x2f\151\143\157\x6e\x5f\x69\155\x70\157\x72\164"); goto eDV9N2HO2zSEUNc9zE4xtv8p5TSr278702b0236770c62821dc58375; eDV9N2HO2zSEUNc9zE4xtv8p5TSr278702b0236770c62821dc58375: return $A2c3274e176f4739b0167934ac66; goto DKQxhk2myjZsu6Qarmax1tF_ssHmeb21141613d9c349949fda7d9a9; c1cb9U_vfa1SOA7LGTKkse1FF7oT40c877dcc7f3246e76d1cbe6857: $A2c3274e176f4739b0167934ac66->setTitle("\302\xa7\x36\302\xbb\40\xc2\xa7\x72\302\247\x6c" . $A7b8da2177b687e356ebbd21e53e . "\x20\xc2\247\162\302\247\66\302\253"); $A2c3274e176f4739b0167934ac66->setContent("\xc2\247\x62\103\157\x69\156\163\x20\151\x6e\x20\110\141\x6e\144\72\x20\302\xa7\x65\x24{$e7482d27410456c4a14ca97cf23b}"); goto E1KRTTyrToSlbFYXnuy2GSnDAPP0beb3761b5754a7b95dfe7566333; DujbVVbsILn5cXm8XMErFZfaRcWc5d0b789aad44b947ae5a7cc74b8: $B251e986dc24e020a5086f536a0d = Main::getInstance()->getSessionManager()->getSession($ce8df0428c0d5fc2c96cece4d007); $A7b8da2177b687e356ebbd21e53e = $B251e986dc24e020a5086f536a0d->bankProvider; goto a1xJLqZiT97o0FMUkQ2nXy2Ed_78fdead7cf4857e6f53417a028bc4; a1xJLqZiT97o0FMUkQ2nXy2Ed_78fdead7cf4857e6f53417a028bc4: $e7482d27410456c4a14ca97cf23b = EconomyAPI::getInstance()->myMoney($ce8df0428c0d5fc2c96cece4d007); $A2c3274e176f4739b0167934ac66 = new SimpleForm(function (Player $ce8df0428c0d5fc2c96cece4d007, ?int $f96b48ffe704d37720c0d2a85b3b = null) use($B251e986dc24e020a5086f536a0d, $e7482d27410456c4a14ca97cf23b) { goto aTPxg1s9yhuDemNlsYG7vOZN3VBb372101c611e4d315ba85efaff64; FNtyT8R3weLi3QnSnxaHue0kkcYz31df47420ecff17560a9cbd14ba: FX_hzaKfiQpu9CoXFU0BA7LD4ODP3bce0accf19c657a77e246e4327: switch ($f96b48ffe704d37720c0d2a85b3b) { case 0: $B251e986dc24e020a5086f536a0d->depositMoney($e7482d27410456c4a14ca97cf23b); goto DOS_z05kSMPeHe6VjtredEB7FgFxef3e00536f0e8c391d8ca6468e6; case 1: $B251e986dc24e020a5086f536a0d->depositMoney($e7482d27410456c4a14ca97cf23b / 2); goto DOS_z05kSMPeHe6VjtredEB7FgFxef3e00536f0e8c391d8ca6468e6; case 2: $ce8df0428c0d5fc2c96cece4d007->sendForm(self::depositCustomForm($ce8df0428c0d5fc2c96cece4d007)); goto DOS_z05kSMPeHe6VjtredEB7FgFxef3e00536f0e8c391d8ca6468e6; case 3: $ce8df0428c0d5fc2c96cece4d007->sendForm(MenuForm::getMenuForm($ce8df0428c0d5fc2c96cece4d007)); goto DOS_z05kSMPeHe6VjtredEB7FgFxef3e00536f0e8c391d8ca6468e6; } goto B0QqEF6alOE4DZ9IYAE3nV3pjhk93f1a684932827c6ba2817819114; B0QqEF6alOE4DZ9IYAE3nV3pjhk93f1a684932827c6ba2817819114: BXMIsNYsHuiWR58XHlWFPKMmNpvl7ae9af9a9cf7447a93a72ed319d: DOS_z05kSMPeHe6VjtredEB7FgFxef3e00536f0e8c391d8ca6468e6: goto bj3OH_b5M2CGlNr_6ZxOP9sLjeFyd032bc83026931bc3def09ad0e6; aTPxg1s9yhuDemNlsYG7vOZN3VBb372101c611e4d315ba85efaff64: if (!($f96b48ffe704d37720c0d2a85b3b === null)) { goto FX_hzaKfiQpu9CoXFU0BA7LD4ODP3bce0accf19c657a77e246e4327; } return; goto FNtyT8R3weLi3QnSnxaHue0kkcYz31df47420ecff17560a9cbd14ba; bj3OH_b5M2CGlNr_6ZxOP9sLjeFyd032bc83026931bc3def09ad0e6: }); goto c1cb9U_vfa1SOA7LGTKkse1FF7oT40c877dcc7f3246e76d1cbe6857; E1KRTTyrToSlbFYXnuy2GSnDAPP0beb3761b5754a7b95dfe7566333: $A2c3274e176f4739b0167934ac66->addButton("\302\247\66\302\273\40\302\247\141\104\145\x70\157\x73\151\x74\x20\x41\x6c\154\x20\xc2\247\x36\xc2\xab\xa\302\247\70\104\x65\160\157\163\x69\164\x20{$e7482d27410456c4a14ca97cf23b}", 1, "\x68\x74\164\160\163\x3a\x2f\x2f\x63\x64\x6e\x2d\x69\143\157\x6e\x73\x2d\160\156\x67\56\x66\x6c\141\164\x69\x63\157\x6e\x2e\x63\x6f\x6d\x2f\61\62\x38\57\x31\60\x34\x31\x2f\61\60\64\61\x38\70\70\56\x70\x6e\x67"); $A2c3274e176f4739b0167934ac66->addButton("\302\xa7\x36\xc2\273\x20\302\247\141\104\x65\160\x6f\163\x69\x74\40\110\x61\x6c\146\x20\xc2\247\x36\302\xab\xa\xc2\247\70\x44\145\x70\x6f\x73\151\164\40" . $e7482d27410456c4a14ca97cf23b / 2, 1, "\x68\x74\164\160\163\72\x2f\57\143\144\156\x2d\x69\x63\x6f\x6e\163\x2d\160\x6e\147\56\146\154\x61\164\x69\143\157\156\x2e\143\x6f\x6d\57\61\62\x38\57\61\60\64\61\x2f\61\x30\64\x31\x38\x38\x38\x2e\160\156\147"); goto DObWagMpzAaric9IPppSuvdzjRqxb0b88ed624990c6b1975dca1359; DKQxhk2myjZsu6Qarmax1tF_ssHmeb21141613d9c349949fda7d9a9: } public static function depositCustomForm(Player $ce8df0428c0d5fc2c96cece4d007) : CustomForm { goto aawHgLdLj2xhpnvD3EahP2DPI6Zj49e8ecad021195e4288f0272c3d; EeouqWuf5KNBxr21nc0qOtskHZTk4d5d79cc2ee21bfd4bd71d92bb5: $A7b8da2177b687e356ebbd21e53e = $B251e986dc24e020a5086f536a0d->bankProvider; $A2c3274e176f4739b0167934ac66 = new CustomForm(function (Player $ce8df0428c0d5fc2c96cece4d007, ?array $f96b48ffe704d37720c0d2a85b3b = null) use($B251e986dc24e020a5086f536a0d) { goto c9N1n1_RZsvlw6FgL711g866tdC187017fb3d9d2068ec4010845ca4; EgjeLcrnoUVgNFKqYO1qG3jQcSd5cd0ec995778ee6d7b01a8134b4c: $ce8df0428c0d5fc2c96cece4d007->sendForm(self::confirmDepositForm($ce8df0428c0d5fc2c96cece4d007, (float) $f96b48ffe704d37720c0d2a85b3b[1], $Fc92f89ce8319e97dbded7ac440e)); goto CQdeW62huMpAU4wbYIB_GWxT2hs634cb8411ed63820baa3e79f411c; c9N1n1_RZsvlw6FgL711g866tdC187017fb3d9d2068ec4010845ca4: if (!($f96b48ffe704d37720c0d2a85b3b === null)) { goto eYUGxVzFkyIhMpLCXROxqAxnV4Fi7b69f62922ced6e3b321a217829; } return; goto d7GpPyGKglHZXueVXDiv1wj83o2d469722acd2bb9cb7a51fdd08180; d7GpPyGKglHZXueVXDiv1wj83o2d469722acd2bb9cb7a51fdd08180: eYUGxVzFkyIhMpLCXROxqAxnV4Fi7b69f62922ced6e3b321a217829: $Fc92f89ce8319e97dbded7ac440e = Banks::getBankData($B251e986dc24e020a5086f536a0d->bankProvider)["\144\145\160\157\x73\x69\x74\x54\x61\170"]; goto EgjeLcrnoUVgNFKqYO1qG3jQcSd5cd0ec995778ee6d7b01a8134b4c; CQdeW62huMpAU4wbYIB_GWxT2hs634cb8411ed63820baa3e79f411c: }); goto CB81033WLlCyshEpboGjsgrflBhf647fc03ad261ce589691cd8d250; CB81033WLlCyshEpboGjsgrflBhf647fc03ad261ce589691cd8d250: $A2c3274e176f4739b0167934ac66->setTitle("\302\xa7\x36\xc2\273\x20\xc2\247\162\xc2\xa7\x6c" . $A7b8da2177b687e356ebbd21e53e . "\40\302\247\162\302\xa7\66\xc2\xab"); $A2c3274e176f4739b0167934ac66->addLabel("\x43\x6f\x69\156\163\40\151\156\x20\x48\141\156\x64\x3a\40\xc2\247\x65\x24{$e7482d27410456c4a14ca97cf23b}"); goto c1oiocAzOxsePnRfMj3T_uThc4pvfd518a2321cb174ed037db50c19; c1oiocAzOxsePnRfMj3T_uThc4pvfd518a2321cb174ed037db50c19: $A2c3274e176f4739b0167934ac66->addInput("\x45\156\x74\x65\162\x20\141\x6d\157\x75\156\x74\40\164\157\40\144\145\x70\x6f\163\x69\x74", "\x31\60\x30\60\60\60"); return $A2c3274e176f4739b0167934ac66; goto ezn_tFN1uEkY8sUGnvCNpvwtLu0xa17da701e53c5b695e319ddadbd; aawHgLdLj2xhpnvD3EahP2DPI6Zj49e8ecad021195e4288f0272c3d: $B251e986dc24e020a5086f536a0d = Main::getInstance()->getSessionManager()->getSession($ce8df0428c0d5fc2c96cece4d007); $e7482d27410456c4a14ca97cf23b = EconomyAPI::getInstance()->myMoney($ce8df0428c0d5fc2c96cece4d007); goto EeouqWuf5KNBxr21nc0qOtskHZTk4d5d79cc2ee21bfd4bd71d92bb5; ezn_tFN1uEkY8sUGnvCNpvwtLu0xa17da701e53c5b695e319ddadbd: } public static function confirmDepositForm(Player $ce8df0428c0d5fc2c96cece4d007, float $E9421243ab5c4959e3cbcb7874c8, float $Fc92f89ce8319e97dbded7ac440e) : CustomForm { goto eSAZpDLAg0457FcIzjZqTHG7jyyG363d66e1004468aa13d76a85222; aTKmSKxAg1sb3tr617UN6HzuGQWM76d36de101c81d8407706a1e73a: $A2c3274e176f4739b0167934ac66->setTitle("\xc2\247\66\xc2\273\40\xc2\xa7\162\xc2\247\154" . $A7b8da2177b687e356ebbd21e53e . "\40\xc2\xa7\162\302\xa7\66\302\253"); $A2c3274e176f4739b0167934ac66->addLabel("\103\x6f\151\156\163\40\151\x6e\x20\110\x61\x6e\x64\72\x20\xc2\xa7\x65\x24{$e7482d27410456c4a14ca97cf23b}\xa\302\xa7\162\x44\x65\160\157\163\151\x74\x20\x41\x6d\x6f\x75\x6e\x74\x3a\40\xc2\xa7\x65\44{$E9421243ab5c4959e3cbcb7874c8}\12\302\xa7\x72\x44\x65\x70\x6f\x73\151\x74\40\124\x61\170\x3a\x20\302\xa7\145\44{$Fc92f89ce8319e97dbded7ac440e}\xa\12\302\xa7\x72\x41\162\x65\40\x79\157\165\40\x73\x75\162\145\40\x79\157\x75\40\167\141\x6e\164\40\x74\157\40\144\145\160\157\163\151\164\x20\164\150\x69\x73\40\x61\x6d\x6f\165\x6e\164\x3f"); goto cQg3Qhoa5TWruaXDjKL8t9MUmqvk34ff11883799c7a52ec5c6f559d; cQg3Qhoa5TWruaXDjKL8t9MUmqvk34ff11883799c7a52ec5c6f559d: $A2c3274e176f4739b0167934ac66->addToggle("\101\155\157\x75\156\164\40\111\156\143\154\x75\144\x65\x20\124\x61\x78\145\x73\77", false); return $A2c3274e176f4739b0167934ac66; goto f2qy9qd_f3bVQTWt2UkUe8jw7XJ241a098bcc0b7379bf538c5207ab; bI9J308697l81ZC1fQgf1rgFGjiB2c6c00848547fa40f10fd8e6912: $A7b8da2177b687e356ebbd21e53e = $B251e986dc24e020a5086f536a0d->bankProvider; $A2c3274e176f4739b0167934ac66 = new CustomForm(function (Player $ce8df0428c0d5fc2c96cece4d007, ?array $f96b48ffe704d37720c0d2a85b3b = null) use($E9421243ab5c4959e3cbcb7874c8, $B251e986dc24e020a5086f536a0d) { if (!($f96b48ffe704d37720c0d2a85b3b === null)) { goto Bozyxtwrbkxkam2n1RA8QWKfgsuc96221dd892149417f2473accd9c; } return; Bozyxtwrbkxkam2n1RA8QWKfgsuc96221dd892149417f2473accd9c: $B251e986dc24e020a5086f536a0d->depositMoney($E9421243ab5c4959e3cbcb7874c8, $f96b48ffe704d37720c0d2a85b3b[1]); }); goto aTKmSKxAg1sb3tr617UN6HzuGQWM76d36de101c81d8407706a1e73a; eSAZpDLAg0457FcIzjZqTHG7jyyG363d66e1004468aa13d76a85222: $B251e986dc24e020a5086f536a0d = Main::getInstance()->getSessionManager()->getSession($ce8df0428c0d5fc2c96cece4d007); $e7482d27410456c4a14ca97cf23b = EconomyAPI::getInstance()->myMoney($ce8df0428c0d5fc2c96cece4d007); goto bI9J308697l81ZC1fQgf1rgFGjiB2c6c00848547fa40f10fd8e6912; f2qy9qd_f3bVQTWt2UkUe8jw7XJ241a098bcc0b7379bf538c5207ab: } }