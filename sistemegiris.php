<?php

$titleSubContent = "Duyuru Sistemine Giriş";

$contentSubContent = ' <br>
                    <form action="duyuruyukle.php" method="post">
                        <table align="center">
                            <tr>
                                <td height ="50" width="164" valign="top"> Duyuru Tipi: </td>
                                <td height ="50" width="164" valign="top"> 
                                    <select name="duyuru" id="duyuru">
                                        <option value="geneld">Genel Duyurular</option>
                                        <option value="bolumd">Bolum Duyuruları</option>
                                        <option value="etkinlikd">Haber ve Etkinlikler</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td height ="50" width="164" valign="top">Üyelik Adı: </td>
                                <td height ="50" width="164" valign="top"><input name="username" type="username" /> </td>
                            </tr>
                            <tr>
                            <tr>
                                <td height ="50" width="164" valign="top">Şifre: </td>
                                <td height ="50" width="164" valign="top"><input name="password" type="password" /><td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Giriş Yap" /></td>
                            </tr>
                        </table>
                      </form>';

include ("page_template.php");
?>