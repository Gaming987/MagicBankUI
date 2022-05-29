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
 namespace AGTHARN\BankUI\command; use AGTHARN\BankUI\Main; use pocketmine\player\Player; use AGTHARN\BankUI\form\MenuForm; use CortexPE\Commando\BaseCommand; use pocketmine\command\CommandSender; use AGTHARN\BankUI\command\subcommand\TopSubCommand; class BankCommand extends BaseCommand { public function prepare() : void { $this->setPermission("\142\x61\156\x6b\x75\x69\x2e\143\x6d\x64"); $this->registerSubCommand(new TopSubCommand("\x74\157\160", "\x43\150\145\x63\153\40\164\150\145\40\142\141\x6e\153\x20\154\145\x61\x64\x65\162\142\x6f\x61\x72\144\x21")); } public function onRun(CommandSender $D355d64bb2d62d290ad4044abce5, string $Bf4961ffd15d7d6cf0658acea05d, array $Fd13a69cc363caf7d5c85e96a219) : void { goto BO5lgWWkBw_Pv2Et8hf05JwlE5Nmb054f7925fb1fe5c50fc2dd2831; eBrAIdG3uD3Jr6fBFmc0lw2EcK4o25a2ca81e42d84e294bd2028ac1: if ($this->testPermission($D355d64bb2d62d290ad4044abce5)) { goto D7gVGm94xsfgwvi03eAhhrRRihuOc4f694821ccddcfc0e111b3511e; } return; goto ePJooSh9qa8ylrN1n2tlD1SNogBA72d5750988615afd41d27f318e2; ePJooSh9qa8ylrN1n2tlD1SNogBA72d5750988615afd41d27f318e2: D7gVGm94xsfgwvi03eAhhrRRihuOc4f694821ccddcfc0e111b3511e: $B251e986dc24e020a5086f536a0d = Main::getInstance()->getSessionManager()->getSession($D355d64bb2d62d290ad4044abce5); goto Cn2rS7APPXRM9q4Bnx3OKFMVxbVNd41b46333b3098256032e6f60b7; Cn2rS7APPXRM9q4Bnx3OKFMVxbVNd41b46333b3098256032e6f60b7: if ($B251e986dc24e020a5086f536a0d->hasBank()) { goto AlI5E9Os8vOT19oBg1ngXbkJwyUkd2c2871c5ef40964fd4f892ddf5; } $D355d64bb2d62d290ad4044abce5->sendForm(MenuForm::getStartForm($D355d64bb2d62d290ad4044abce5)); goto b3NrTlgSYcsLvaNdlIiQr_8wUw1m031b54f3c9adc70d2cf1bc5f5fd; BkfJF0BA7ESjL__74_My_ZYNUwUn14ea7e246752fbc43edfbbaf5f5: $D355d64bb2d62d290ad4044abce5->sendForm(MenuForm::getMenuForm($D355d64bb2d62d290ad4044abce5)); goto bP88x9kBvEqq4FtXqh2Im4Vm52uDf0860925e59829b98fe9439441e; b6BbICelGFN9noUPGNRCJ8haDjIb064aa4d2a7095772af26c50a52c: return; E37WwH7kM1mMYmfFBcScS7MT52twc079e853016f94e64b4b46f441d: goto eBrAIdG3uD3Jr6fBFmc0lw2EcK4o25a2ca81e42d84e294bd2028ac1; elLX6arif_Th2GNSVvlBkNocLpChd2f84990fb502af39d25318ad65: if ($B251e986dc24e020a5086f536a0d->isBankActivated()) { goto AGNSTSsPtoh6x3RjxiyLYoAYaSkO2af375b1d5060352122f963c753; } $D355d64bb2d62d290ad4044abce5->sendForm(MenuForm::getActivatingForm($D355d64bb2d62d290ad4044abce5)); goto E7YZVV9QZq_v9IZTkZtzsgknZeZO07bb7873d7dc6bb53da1cd17cbb; fsgpyiw7NfZCbMOX2dn6sPvUoZhz1cd612070fa4aef80d45b1f57ce: return; aKeUzDVgBD0GOn_oippOuMv5CF9Tacb6278e27e717d51971edc2687: goto BkfJF0BA7ESjL__74_My_ZYNUwUn14ea7e246752fbc43edfbbaf5f5; BO5lgWWkBw_Pv2Et8hf05JwlE5Nmb054f7925fb1fe5c50fc2dd2831: if ($D355d64bb2d62d290ad4044abce5 instanceof Player) { goto E37WwH7kM1mMYmfFBcScS7MT52twc079e853016f94e64b4b46f441d; } $D355d64bb2d62d290ad4044abce5->sendMessage("\131\157\165\x20\155\165\x73\x74\x20\x62\145\x20\151\x6e\55\147\141\155\145\40\164\157\x20\162\x75\x6e\40\164\x68\151\163\x20\x63\157\155\155\141\x6e\x64\41"); goto b6BbICelGFN9noUPGNRCJ8haDjIb064aa4d2a7095772af26c50a52c; BlyLRyweJG6daQOEegomh8gFGjpnd22f220ea84c7328cd5508e6919: if (!$B251e986dc24e020a5086f536a0d->frozen) { goto aKeUzDVgBD0GOn_oippOuMv5CF9Tacb6278e27e717d51971edc2687; } $D355d64bb2d62d290ad4044abce5->sendForm(MenuForm::getFrozenForm($D355d64bb2d62d290ad4044abce5)); goto fsgpyiw7NfZCbMOX2dn6sPvUoZhz1cd612070fa4aef80d45b1f57ce; b3NrTlgSYcsLvaNdlIiQr_8wUw1m031b54f3c9adc70d2cf1bc5f5fd: return; AlI5E9Os8vOT19oBg1ngXbkJwyUkd2c2871c5ef40964fd4f892ddf5: goto elLX6arif_Th2GNSVvlBkNocLpChd2f84990fb502af39d25318ad65; E7YZVV9QZq_v9IZTkZtzsgknZeZO07bb7873d7dc6bb53da1cd17cbb: return; AGNSTSsPtoh6x3RjxiyLYoAYaSkO2af375b1d5060352122f963c753: goto BlyLRyweJG6daQOEegomh8gFGjpnd22f220ea84c7328cd5508e6919; bP88x9kBvEqq4FtXqh2Im4Vm52uDf0860925e59829b98fe9439441e: } }
