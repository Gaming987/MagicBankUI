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
 namespace AGTHARN\BankUI\command\subcommand; use AGTHARN\BankUI\Main; use CortexPE\Commando\BaseSubCommand; use pocketmine\command\CommandSender; class TopSubCommand extends BaseSubCommand { public function prepare() : void { $this->setPermission("\x62\141\156\153\x75\151\56\143\155\x64\x2e\164\x6f\160"); } public function onRun(CommandSender $D355d64bb2d62d290ad4044abce5, string $Bf4961ffd15d7d6cf0658acea05d, array $Fd13a69cc363caf7d5c85e96a219) : void { goto ffngYjiH209AWLj5nE0LglH0uYCg8d4f912bfc63ad0567ecd2bdba4; ccPnWkKFKn5gTfDbF_kvP1lig9m14b1792e6d44f4e4a7d1f0151094: eh82fWQMcb5YcpZe1Lb7kTSl8Y1K5080f730c83c97cbec8537547be: goto dnVe72iFsDupENaB0VKxGV6bHwEn178c4129a5d670a3f6de784a9e5; ffngYjiH209AWLj5nE0LglH0uYCg8d4f912bfc63ad0567ecd2bdba4: if ($this->testPermissionSilent($D355d64bb2d62d290ad4044abce5)) { goto Cq9RfFDx1mGjjZn8Oty3STZb5WEE9874e66016913d471dff37c83a6; } return; goto b1onMSM2xk4RoQZqNfQuG0BL3P2Gfd56f302143573d70f1e7e2ff02; b1onMSM2xk4RoQZqNfQuG0BL3P2Gfd56f302143573d70f1e7e2ff02: Cq9RfFDx1mGjjZn8Oty3STZb5WEE9874e66016913d471dff37c83a6: foreach (Main::getInstance()->leaderBoard as $bbefd818329b1d5261239e64df39 => $e30ef0407685a375f515bd909a97) { $D355d64bb2d62d290ad4044abce5->sendMessage("\xc2\247\x61" . $bbefd818329b1d5261239e64df39 . "\x20\xc2\xa7\67\55\x20\302\247\x65\x24" . $e30ef0407685a375f515bd909a97 . "\xc2\247\x37"); AdZS4WBRsPhloUSuvdAzU65emSx88bb43a35b115775dca23844d360: } goto ccPnWkKFKn5gTfDbF_kvP1lig9m14b1792e6d44f4e4a7d1f0151094; dnVe72iFsDupENaB0VKxGV6bHwEn178c4129a5d670a3f6de784a9e5: } }
