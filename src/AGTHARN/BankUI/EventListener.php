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
 namespace AGTHARN\BankUI; use AGTHARN\BankUI\bank\Banks; use pocketmine\event\Listener; use AGTHARN\MagicSync\MagicSync; use onebone\economyapi\EconomyAPI; use pocketmine\scheduler\ClosureTask; use pocketmine\event\player\PlayerJoinEvent; use pocketmine\event\player\PlayerQuitEvent; use pocketmine\event\player\PlayerInteractEvent; class EventListener implements Listener { public function onPlayerJoin(PlayerJoinEvent $e8fcde424960d98e01b28e8ecaae) : void { MagicSync::getInstance()->addPlayerJoin($e8fcde424960d98e01b28e8ecaae->getPlayer(), new ClosureTask(function () use($e8fcde424960d98e01b28e8ecaae) : void { goto aLwsu5Ee7cWh__3aMIqaa7thBI4padd9c28c4b8fbc0ae98885ce2c1; aLwsu5Ee7cWh__3aMIqaa7thBI4padd9c28c4b8fbc0ae98885ce2c1: $B251e986dc24e020a5086f536a0d = Main::getInstance()->getSessionManager()->getSession($e8fcde424960d98e01b28e8ecaae->getPlayer()); if (!(!$B251e986dc24e020a5086f536a0d->allowed && $B251e986dc24e020a5086f536a0d->money >= Banks::MONEY_LIMIT)) { goto dJDilkNhqC7yg3Rt4s36ENchAtxHea515311a461035c1c0670ce1de; } goto EyeFGvr7rEMSSAVuiRBhfZN2CWAxa0e69d85a6f3639cf250fafe3a2; EyeFGvr7rEMSSAVuiRBhfZN2CWAxa0e69d85a6f3639cf250fafe3a2: $B251e986dc24e020a5086f536a0d->handleMessage("\356\x84\xaf\x20\302\xa7\x63\x57\145\40\150\141\166\145\x20\x64\145\164\x65\143\x74\145\x64\40\171\x6f\165\x72\x20\142\x61\x6e\x6b\x20\x77\x69\164\150\40\x61\x20\x6c\x61\x72\147\x65\40\163\165\155\x20\x6f\x66\x20\x6d\157\x6e\x65\x79\x20\x61\x6e\144\x2c\40\x68\x61\x76\145\x20\x66\x6c\141\147\x67\x65\x64\40\x61\x6e\x64\40\146\x72\x6f\172\x65\156\x20\x79\x6f\165\x72\x20\x61\x63\143\157\x75\156\x74\41"); $B251e986dc24e020a5086f536a0d->frozen = true; goto BqWxWR7LGXNYjiEa7vJAw3VwBHO9d79f746e7af912885ea2039e2b0; BqWxWR7LGXNYjiEa7vJAw3VwBHO9d79f746e7af912885ea2039e2b0: dJDilkNhqC7yg3Rt4s36ENchAtxHea515311a461035c1c0670ce1de: goto DdJULFKwqUXC1fQnOocAI9GoMT6lcab6e6dd77a40f1718a2c696f45; DdJULFKwqUXC1fQnOocAI9GoMT6lcab6e6dd77a40f1718a2c696f45: }), "\103\x48\105\103\113\111\x4e\x47\x20\x42\x41\116\113\40\x41\103\103\x4f\125\x4e\124"); } public function onPlayerQuit(PlayerQuitEvent $e8fcde424960d98e01b28e8ecaae) : void { Main::getInstance()->getSessionManager()->getSession($e8fcde424960d98e01b28e8ecaae->getPlayer())->remove(); } public function onPlayerInteract(PlayerInteractEvent $e8fcde424960d98e01b28e8ecaae) : void { goto aRw8dTwT6lbHoHCgP1jNiyLQiw1uf208b5f454a96a4f013122f1201; Cd21xzeEsZPo3rQCBeuYLq0HdPtx8bfde0e5bb181b264dbad7e8b1d: eSNqMNNEoN456qvn6nHBNv0b5Ntlf31aeee5704459d456a31fc831d: goto EZy0b0qOr0j8hSOFm12xiAdiQqNXfa00bd71bd08f329402124cf1af; DgVIXudIGe6QgQsdLvaUXAKL8t8r4f6b9caa8c34f1cadc77a2ec5c5: if (!($e5b36ef21d5d3c811287973620ac->getNamedTag()->getTag("\x6e\157\x74\x65\101\155\157\165\156\x74") !== null)) { goto eSNqMNNEoN456qvn6nHBNv0b5Ntlf31aeee5704459d456a31fc831d; } $E9421243ab5c4959e3cbcb7874c8 = $e5b36ef21d5d3c811287973620ac->getNamedTag()->getFloat("\x6e\157\x74\x65\101\x6d\x6f\165\156\164"); goto EZNRGEKn7zJr7oPI6Oyz_GQQawG0faf2a6d462d8572c3223e7349e7; aCKpLLgwj3WEzJn5d73GLpDJe0qR26d6ecdd03a62d44c42ad66cbd7: EconomyAPI::getInstance()->addMoney($ce8df0428c0d5fc2c96cece4d007, $E9421243ab5c4959e3cbcb7874c8); $ce8df0428c0d5fc2c96cece4d007->sendMessage("\xee\207\270\x20\302\247\67\131\x6f\165\x20\x48\x61\166\145\40\x43\x6c\x61\151\x6d\145\144\40\302\247\x65\44" . $E9421243ab5c4959e3cbcb7874c8 . "\xc2\247\67\40\116\157\164\x65\x21"); goto Cd21xzeEsZPo3rQCBeuYLq0HdPtx8bfde0e5bb181b264dbad7e8b1d; aRw8dTwT6lbHoHCgP1jNiyLQiw1uf208b5f454a96a4f013122f1201: $ce8df0428c0d5fc2c96cece4d007 = $e8fcde424960d98e01b28e8ecaae->getPlayer(); $e5b36ef21d5d3c811287973620ac = $e8fcde424960d98e01b28e8ecaae->getItem(); goto DgVIXudIGe6QgQsdLvaUXAKL8t8r4f6b9caa8c34f1cadc77a2ec5c5; EZNRGEKn7zJr7oPI6Oyz_GQQawG0faf2a6d462d8572c3223e7349e7: $e5b36ef21d5d3c811287973620ac->setCount($e5b36ef21d5d3c811287973620ac->getCount() - 1); $ce8df0428c0d5fc2c96cece4d007->getInventory()->setItemInHand($e5b36ef21d5d3c811287973620ac); goto aCKpLLgwj3WEzJn5d73GLpDJe0qR26d6ecdd03a62d44c42ad66cbd7; EZy0b0qOr0j8hSOFm12xiAdiQqNXfa00bd71bd08f329402124cf1af: } }
