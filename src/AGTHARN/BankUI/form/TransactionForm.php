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
 namespace AGTHARN\BankUI\form; use AGTHARN\BankUI\Main; use pocketmine\player\Player; use AGTHARN\BankUI\bank\Banks; use jojoe77777\FormAPI\SimpleForm; class TransactionForm { public static function transactionForm(Player $ce8df0428c0d5fc2c96cece4d007) : SimpleForm { goto bYjhjX2_W64Ygv36zxk81WYZUB3Bf9113bfb843cdc062147f7bb642; AB96bFQTSoXEx4eskwfSRjBjyA5g6484a73757a604d920f35252244: CUHECoUOvSQgXbpYXm6vzaDrFTB2b6a65771f34f897b945e0a5a764: $A2c3274e176f4739b0167934ac66 = new SimpleForm(function (Player $ce8df0428c0d5fc2c96cece4d007, ?int $f96b48ffe704d37720c0d2a85b3b = null) { goto bmtcxUleopef37XIK75fD2oaeclZ55c9f54d58cc07aac44e4188c93; AUOqHjjPNr0tIGa8LK1GXNXafxEr771a91331bdaa886ebe7af88de5: CwaLuQDUSl6wVIYzuDbHi9uiYjiH20adb277545f6ba1e4a909cf912: switch ($f96b48ffe704d37720c0d2a85b3b) { case 0: $ce8df0428c0d5fc2c96cece4d007->sendForm(MenuForm::getMenuForm($ce8df0428c0d5fc2c96cece4d007)); goto aJC3BqwFDCiuMq_tC966wX3o8LNLea4259e6651ed7da4845f8186ee; } goto asq4H1My2Motf8inYWhRJkmDKuXid982bedfed5cc517b8f2d166db9; asq4H1My2Motf8inYWhRJkmDKuXid982bedfed5cc517b8f2d166db9: Ceohf_0pMX5PU3htxz1oeaNdtBM74d50fbd6f833811de018c70da30: aJC3BqwFDCiuMq_tC966wX3o8LNLea4259e6651ed7da4845f8186ee: goto bsqgAj_C_Nz03OCKpEN71P6Gidv6d98e13e3ee00326d6707f0690dc; bmtcxUleopef37XIK75fD2oaeclZ55c9f54d58cc07aac44e4188c93: if (!($f96b48ffe704d37720c0d2a85b3b === null)) { goto CwaLuQDUSl6wVIYzuDbHi9uiYjiH20adb277545f6ba1e4a909cf912; } return; goto AUOqHjjPNr0tIGa8LK1GXNXafxEr771a91331bdaa886ebe7af88de5; bsqgAj_C_Nz03OCKpEN71P6Gidv6d98e13e3ee00326d6707f0690dc: }); goto dINWNf1r7migc6MeMr2azmIYzvYraaf70fd85510c30ed80a16ba1f9; bNIlMeH64MdwlBrK5LVKr3tmPUcKee930e8430dd25ac2f6d81d338a: return $A2c3274e176f4739b0167934ac66; goto D2iE8x7SoSoRauhJJUzBnx70JHpW4128607575749ceab625607ea97; FBkXW2fYmcW7w32z6F9N3PVuclRv253b80f94b85ffe06870339c935: $b5942d0e01bfebb2951249124b17 = ''; foreach ($B251e986dc24e020a5086f536a0d->transactionLogs as $d8d6ffd5714d6fdaea2d63d804e4) { $D725bea7567cfc7acda578515faa = match ($d8d6ffd5714d6fdaea2d63d804e4["\x74\171\x70\x65"]) { Banks::TRANSACTION_TYPE_DEPOSIT => "\104\x72", Banks::TRANSACTION_TYPE_WITHDRAW => "\103\x72", Banks::TRANSACTION_TYPE_TRANSFER => "\x44\x72", default => '', }; $b5942d0e01bfebb2951249124b17 .= $d8d6ffd5714d6fdaea2d63d804e4["\144\141\x74\145"] . "\40\302\xa7\145\55\40" . $d8d6ffd5714d6fdaea2d63d804e4["\164\171\160\145"] . "\x20\44" . $d8d6ffd5714d6fdaea2d63d804e4["\141\x6d\x6f\165\156\164"] . "\40" . $D725bea7567cfc7acda578515faa . "\302\247\67\xa"; CP3SGlUbjken7KtLpEVhXa8JiRHSf036938914d46dad678f886cf2b: } goto AB96bFQTSoXEx4eskwfSRjBjyA5g6484a73757a604d920f35252244; bYjhjX2_W64Ygv36zxk81WYZUB3Bf9113bfb843cdc062147f7bb642: $B251e986dc24e020a5086f536a0d = Main::getInstance()->getSessionManager()->getSession($ce8df0428c0d5fc2c96cece4d007); $A7b8da2177b687e356ebbd21e53e = $B251e986dc24e020a5086f536a0d->bankProvider; goto FBkXW2fYmcW7w32z6F9N3PVuclRv253b80f94b85ffe06870339c935; eVGvtC9cMMj7UXLvdAxrTp2eHd23f69da48aed077adca21b580e8bf: $A2c3274e176f4739b0167934ac66->addButton("\302\xa7\66\302\247\x6c\x42\x41\103\x4b\12\xc2\xa7\162\302\247\70\x54\x61\x70\40\x74\x6f\x20\x67\157\x20\x62\x61\143\153", 0, "\164\x65\170\164\x75\x72\145\163\x2f\165\151\57\151\x63\157\156\x5f\x69\155\160\x6f\162\164"); $A2c3274e176f4739b0167934ac66->addButton("\302\247\x63\xc2\247\154\105\x58\x49\x54\12\xc2\247\x72\xc2\247\x38\x54\x61\160\x20\164\157\x20\x65\x78\151\164", 0, "\x74\145\x78\164\165\x72\x65\x73\57\165\151\x2f\143\x61\x6e\143\x65\x6c"); goto bNIlMeH64MdwlBrK5LVKr3tmPUcKee930e8430dd25ac2f6d81d338a; dINWNf1r7migc6MeMr2azmIYzvYraaf70fd85510c30ed80a16ba1f9: $A2c3274e176f4739b0167934ac66->setTitle("\xc2\xa7\x36\302\273\40\302\xa7\162\xc2\xa7\154" . $A7b8da2177b687e356ebbd21e53e . "\40\xc2\247\162\302\xa7\x36\xc2\xab"); $A2c3274e176f4739b0167934ac66->setContent($b5942d0e01bfebb2951249124b17); goto eVGvtC9cMMj7UXLvdAxrTp2eHd23f69da48aed077adca21b580e8bf; D2iE8x7SoSoRauhJJUzBnx70JHpW4128607575749ceab625607ea97: } }
