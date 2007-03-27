<?php
/*
 *  $Id: EventListener.php 1080 2007-02-10 18:17:08Z romanb $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.phpdoctrine.com>.
 */
/**
 * Doctrine_Db_EventListener
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @package     Doctrine
 * @category    Object Relational Mapping
 * @link        www.phpdoctrine.com
 * @since       1.0
 * @version     $Revision: 1080 $
 */
class Doctrine_Db_EventListener implements Doctrine_Db_EventListener_Interface
{
    public function onPreConnect(Doctrine_Db_Event $event)
    { }
    public function onConnect(Doctrine_Db_Event $event)
    { }

    public function onPreQuery(Doctrine_Db_Event $event)
    { }
    public function onQuery(Doctrine_Db_Event $event)
    { }

    public function onPrePrepare(Doctrine_Db_Event $event)
    { }
    public function onPrepare(Doctrine_Db_Event $event)
    { }

    public function onPreCommit(Doctrine_Db_Event $event)
    { }
    public function onCommit(Doctrine_Db_Event $event)
    { }

    public function onPreExec(Doctrine_Db_Event $event)
    { }
    public function onExec(Doctrine_Db_Event $event)
    { }
    
    public function onPreFetch(Doctrine_Db_Event $event)
    { }
    public function onFetch(Doctrine_Db_Event $event)
    { }

    public function onPreFetchAll(Doctrine_Db_Event $event)
    { }
    public function onFetchAll(Doctrine_Db_Event $event)
    { }

    public function onPreRollBack(Doctrine_Db_Event $event)
    { }
    public function onRollBack(Doctrine_Db_Event $event)
    { }

    public function onPreBeginTransaction(Doctrine_Db_Event $event)
    { }
    public function onBeginTransaction(Doctrine_Db_Event $event)
    { }

    public function onPreExecute(Doctrine_Db_Event $event)
    { }
    public function onExecute(Doctrine_Db_Event $event)
    { }
}
