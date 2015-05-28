<?php

$php_classes = array (
  'Exception' => 
  array (
    'getMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'Exception::getMessage',
    ),
    'getPrevious' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'Exception',
      'name' => 'Exception::getPrevious',
    ),
    'getCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'mixed',
      'name' => 'Exception::getCode',
    ),
    'getFile' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'Exception::getFile',
    ),
    'getLine' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'int',
      'name' => 'Exception::getLine',
    ),
    'getTrace' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'array',
      'name' => 'Exception::getTrace',
    ),
    'getTraceAsString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'Exception::getTraceAsString',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Exception::__toString',
    ),
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Exception::__clone',
    ),
  ),
  'ErrorException' => 
  array (
    'getSeverity' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'int',
      'name' => 'ErrorException::getSeverity',
    ),
  ),
  'Iterator' => 
  array (
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'mixed',
      'name' => 'Iterator::current',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'scalar',
      'name' => 'Iterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'Iterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'Iterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'boolean',
      'name' => 'Iterator::valid',
    ),
  ),
  'IteratorAggregate' => 
  array (
    'getIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'Traversable',
      'name' => 'IteratorAggregate::getIterator',
    ),
  ),
  'ArrayAccess' => 
  array (
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'boolean',
      'name' => 'ArrayAccess::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'mixed',
      'name' => 'ArrayAccess::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'ArrayAccess::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'ArrayAccess::offsetUnset',
    ),
  ),
  'Serializable' => 
  array (
    'serialize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'string',
      'name' => 'Serializable::serialize',
    ),
    'unserialize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$serialized',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'Serializable::unserialize',
    ),
  ),
  'Closure' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'name' => 'Closure::__construct',
    ),
    'bind' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Closure',
          'name' => '$closure',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'object',
          'name' => '$newthis',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$newscope',
          'initializer' => '= "static"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Closure',
      'name' => 'Closure::bind',
    ),
    'bindTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$newthis',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$newscope',
          'initializer' => '= "static"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Closure',
      'name' => 'Closure::bindTo',
    ),
  ),
  'Generator' => 
  array (
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Generator::current',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Generator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Generator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Generator::rewind',
    ),
    'send' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Generator::send',
    ),
    'throw' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Exception',
          'name' => '$exception',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Generator::throw',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Generator::valid',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Generator::__wakeup',
    ),
  ),
  'APCIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$cache',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$search',
          'initializer' => '= null',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'initializer' => '= APC_ITER_ALL',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$chunk_size',
          'initializer' => '= 100',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$list',
          'initializer' => '= APC_LIST_ACTIVE',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'APCIterator::__construct',
      'type' => 'string',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'APCIterator::current',
    ),
    'getTotalCount' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'APCIterator::getTotalCount',
    ),
    'getTotalHits' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'APCIterator::getTotalHits',
    ),
    'getTotalSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'APCIterator::getTotalSize',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'APCIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'APCIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'APCIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'APCIterator::valid',
    ),
  ),
  'Runkit_Sandbox' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'Runkit_Sandbox::__construct',
    ),
  ),
  'Runkit_Sandbox_Parent' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'Runkit_Sandbox_Parent::__construct',
    ),
  ),
  'Weakref' => 
  array (
    'acquire' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Weakref::acquire',
    ),
    'get' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'object',
      'name' => 'Weakref::get',
    ),
    'release' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Weakref::release',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Weakref::valid',
    ),
  ),
  'WeakMap' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'WeakMap::__construct',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'WeakMap::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'WeakMap::current',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'object',
      'name' => 'WeakMap::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'WeakMap::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'WeakMap::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'WeakMap::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'WeakMap::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'WeakMap::offsetUnset',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'WeakMap::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'WeakMap::valid',
    ),
  ),
  'KTaglib_MPEG_File' => 
  array (
    'getAudioProperties' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'KTaglib_MPEG_File',
      'name' => 'KTaglib_MPEG_File::getAudioProperties',
    ),
    'getID3v1Tag' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$create',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'KTaglib_ID3v1_Tag',
      'name' => 'KTaglib_MPEG_File::getID3v1Tag',
    ),
    'getID3v2Tag' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$create',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'KTaglib_ID3v2_Tag',
      'name' => 'KTaglib_MPEG_File::getID3v2Tag',
    ),
  ),
  'KTaglib_MPEG_AudioProperties' => 
  array (
    'getBitrate' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_MPEG_AudioProperties::getBitrate',
    ),
    'getChannels' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_MPEG_AudioProperties::getChannels',
    ),
    'getLayer' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_MPEG_AudioProperties::getLayer',
    ),
    'getLength' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_MPEG_AudioProperties::getLength',
    ),
    'getSampleBitrate' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_MPEG_AudioProperties::getSampleBitrate',
    ),
    'getVersion' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_MPEG_AudioProperties::getVersion',
    ),
    'isCopyrighted' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'KTaglib_MPEG_AudioProperties::isCopyrighted',
    ),
    'isOriginal' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'KTaglib_MPEG_AudioProperties::isOriginal',
    ),
    'isProtectionEnabled' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'KTaglib_MPEG_AudioProperties::isProtectionEnabled',
    ),
  ),
  'KTaglib_Tag' => 
  array (
    'getAlbum' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_Tag::getAlbum',
    ),
    'getArtist' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_Tag::getArtist',
    ),
    'getComment' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_Tag::getComment',
    ),
    'getGenre' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_Tag::getGenre',
    ),
    'getTitle' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_Tag::getTitle',
    ),
    'getTrack' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_Tag::getTrack',
    ),
    'getYear' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_Tag::getYear',
    ),
    'isEmpty' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'KTaglib_Tag::isEmpty',
    ),
  ),
  'KTaglib_ID3v2_Tag' => 
  array (
    'addFrame' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'KTaglib_ID3v2_Frame',
          'name' => '$frame',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'KTaglib_ID3v2_Tag::addFrame',
    ),
    'getFrameList' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'KTaglib_ID3v2_Tag::getFrameList',
    ),
  ),
  'KTaglib_ID3v2_Frame' => 
  array (
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_ID3v2_Frame::getSize',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_ID3v2_Frame::__toString',
    ),
  ),
  'KTaglib_ID3v2_AttachedPictureFrame' => 
  array (
    'getDescription' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_ID3v2_AttachedPictureFrame::getDescription',
    ),
    'getMimeType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'KTaglib_ID3v2_AttachedPictureFrame::getMimeType',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'KTaglib_ID3v2_AttachedPictureFrame::getType',
    ),
    'savePicture' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'KTaglib_ID3v2_AttachedPictureFrame::savePicture',
    ),
    'setPicture' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'KTaglib_ID3v2_AttachedPictureFrame::setPicture',
    ),
    'setType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'KTaglib_ID3v2_AttachedPictureFrame::setType',
    ),
  ),
  'Phar' => 
  array (
    'addEmptyDir' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dirname',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::addEmptyDir',
    ),
    'addFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$localname',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::addFile',
    ),
    'addFromString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$localname',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$contents',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::addFromString',
    ),
    'apiVersion' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'Phar::apiVersion',
    ),
    'buildFromDirectory' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$base_dir',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$regex',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Phar::buildFromDirectory',
    ),
    'buildFromIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iter',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$base_directory',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Phar::buildFromIterator',
    ),
    'canCompress' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'bool',
      'name' => 'Phar::canCompress',
    ),
    'canWrite' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'bool',
      'name' => 'Phar::canWrite',
    ),
    'compress' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'object',
      'name' => 'Phar::compress',
    ),
    'compressAllFilesBZIP2' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::compressAllFilesBZIP2',
    ),
    'compressAllFilesGZ' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::compressAllFilesGZ',
    ),
    'compressFiles' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::compressFiles',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$fname',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$alias',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Phar::__construct',
      'type' => 'string',
    ),
    'convertToData' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'initializer' => '= 9021976',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'initializer' => '= 9021976',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'PharData',
      'name' => 'Phar::convertToData',
    ),
    'convertToExecutable' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'initializer' => '= 9021976',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'initializer' => '= 9021976',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Phar',
      'name' => 'Phar::convertToExecutable',
    ),
    'copy' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$oldfile',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$newfile',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::copy',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Phar::count',
    ),
    'createDefaultStub' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$indexfile',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$webindexfile',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'Phar::createDefaultStub',
    ),
    'decompress' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'object',
      'name' => 'Phar::decompress',
    ),
    'decompressFiles' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::decompressFiles',
    ),
    'delMetadata' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::delMetadata',
    ),
    'delete' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$entry',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::delete',
    ),
    'extractTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pathto',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string|array',
          'name' => '$files',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$overwrite',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::extractTo',
    ),
    'getMetadata' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Phar::getMetadata',
    ),
    'getModified' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::getModified',
    ),
    'getSignature' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Phar::getSignature',
    ),
    'getStub' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Phar::getStub',
    ),
    'getSupportedCompression' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'array',
      'name' => 'Phar::getSupportedCompression',
    ),
    'getSupportedSignatures' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'array',
      'name' => 'Phar::getSupportedSignatures',
    ),
    'getVersion' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Phar::getVersion',
    ),
    'hasMetadata' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::hasMetadata',
    ),
    'interceptFileFuncs' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Phar::interceptFileFuncs',
    ),
    'isBuffering' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::isBuffering',
    ),
    'isCompressed' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Phar::isCompressed',
    ),
    'isFileFormat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::isFileFormat',
    ),
    'isValidPharFilename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$executable',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'bool',
      'name' => 'Phar::isValidPharFilename',
    ),
    'isWritable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::isWritable',
    ),
    'loadPhar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$alias',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'bool',
      'name' => 'Phar::loadPhar',
    ),
    'mapPhar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$alias',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$dataoffset',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'bool',
      'name' => 'Phar::mapPhar',
    ),
    'mount' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pharpath',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$externalpath',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Phar::mount',
    ),
    'mungServer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$munglist',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Phar::mungServer',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Phar::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::offsetUnset',
    ),
    'running' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$retphar',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'Phar::running',
    ),
    'setAlias' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$alias',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::setAlias',
    ),
    'setDefaultStub' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$webindex',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::setDefaultStub',
    ),
    'setMetadata' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$metadata',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::setMetadata',
    ),
    'setSignatureAlgorithm' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$sigtype',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::setSignatureAlgorithm',
    ),
    'setStub' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$stub',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$len',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::setStub',
    ),
    'startBuffering' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::startBuffering',
    ),
    'stopBuffering' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Phar::stopBuffering',
    ),
    'uncompressAllFiles' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Phar::uncompressAllFiles',
    ),
    'unlinkArchive' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$archive',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'bool',
      'name' => 'Phar::unlinkArchive',
    ),
    'webPhar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$alias',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'initializer' => '= "index.php"',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$f404',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'array',
          'name' => '$mimetypes',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'callable',
          'name' => '$rewrites',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Phar::webPhar',
    ),
  ),
  'PharData' => 
  array (
    'addEmptyDir' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dirname',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::addEmptyDir',
    ),
    'addFromString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$localname',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$contents',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::addFromString',
    ),
    'buildFromIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iter',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$base_directory',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'PharData::buildFromIterator',
    ),
    'compress' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'PharData::compress',
    ),
    'compressFiles' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::compressFiles',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$fname',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$alias',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'initializer' => '= Phar::TAR',
          'required' => false,
        ),
      ),
      'name' => 'PharData::__construct',
      'type' => 'string',
    ),
    'convertToData' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'type' => 'PharData',
      'name' => 'PharData::convertToData',
    ),
    'convertToExecutable' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'type' => 'Phar',
      'name' => 'PharData::convertToExecutable',
    ),
    'copy' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$oldfile',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$newfile',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::copy',
    ),
    'decompress' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$extension',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'PharData::decompress',
    ),
    'decompressFiles' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'PharData::decompressFiles',
    ),
    'delMetadata' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'PharData::delMetadata',
    ),
    'delete' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$entry',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::delete',
    ),
    'extractTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pathto',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string|array',
          'name' => '$files',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$overwrite',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::extractTo',
    ),
    'isWritable' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'PharData::isWritable',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'PharData::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::offsetUnset',
    ),
    'setAlias' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$alias',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::setAlias',
    ),
    'setDefaultStub' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$webindex',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::setDefaultStub',
    ),
    'setStub' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$stub',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$len',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'PharData::setStub',
    ),
  ),
  'PharFileInfo' => 
  array (
    'chmod' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$permissions',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'PharFileInfo::chmod',
    ),
    'compress' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::compress',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$entry',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'PharFileInfo::__construct',
      'type' => 'string',
    ),
    'decompress' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::decompress',
    ),
    'delMetadata' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::delMetadata',
    ),
    'getCRC32' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'PharFileInfo::getCRC32',
    ),
    'getCompressedSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'PharFileInfo::getCompressedSize',
    ),
    'getMetadata' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'PharFileInfo::getMetadata',
    ),
    'getPharFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'PharFileInfo::getPharFlags',
    ),
    'hasMetadata' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::hasMetadata',
    ),
    'isCRCChecked' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::isCRCChecked',
    ),
    'isCompressed' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression_type',
          'initializer' => '= 9021976',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::isCompressed',
    ),
    'isCompressedBZIP2' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::isCompressedBZIP2',
    ),
    'isCompressedGZ' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::isCompressedGZ',
    ),
    'setCompressedBZIP2' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::setCompressedBZIP2',
    ),
    'setCompressedGZ' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::setCompressedGZ',
    ),
    'setMetadata' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$metadata',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'PharFileInfo::setMetadata',
    ),
    'setUncompressed' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PharFileInfo::setUncompressed',
    ),
  ),
  'RarArchive' => 
  array (
    'close' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarArchive::close',
    ),
    'getComment' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RarArchive::getComment',
    ),
    'getEntries' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'RarArchive::getEntries',
    ),
    'getEntry' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$entryname',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'RarEntry',
      'name' => 'RarArchive::getEntry',
    ),
    'isBroken' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarArchive::isBroken',
    ),
    'isSolid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarArchive::isSolid',
    ),
    'open' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$volume_callback',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'RarArchive',
      'name' => 'RarArchive::open',
    ),
    'setAllowBroken' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$allow_broken',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarArchive::setAllowBroken',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RarArchive::__toString',
    ),
  ),
  'RarEntry' => 
  array (
    'extract' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dir',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$filepath',
          'initializer' => '= ""',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'initializer' => '= NULL',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$extended_data',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarEntry::extract',
    ),
    'getAttr' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RarEntry::getAttr',
    ),
    'getCrc' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RarEntry::getCrc',
    ),
    'getFileTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RarEntry::getFileTime',
    ),
    'getHostOs' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RarEntry::getHostOs',
    ),
    'getMethod' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RarEntry::getMethod',
    ),
    'getName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RarEntry::getName',
    ),
    'getPackedSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RarEntry::getPackedSize',
    ),
    'getStream' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'resource',
      'name' => 'RarEntry::getStream',
    ),
    'getUnpackedSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RarEntry::getUnpackedSize',
    ),
    'getVersion' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RarEntry::getVersion',
    ),
    'isDirectory' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarEntry::isDirectory',
    ),
    'isEncrypted' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarEntry::isEncrypted',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RarEntry::__toString',
    ),
  ),
  'RarException' => 
  array (
    'isUsingExceptions' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RarException::isUsingExceptions',
    ),
    'setUsingExceptions' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$using_exceptions',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RarException::setUsingExceptions',
    ),
  ),
  'ZipArchive' => 
  array (
    'addEmptyDir' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dirname',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::addEmptyDir',
    ),
    'addFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$localname',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$start',
          'initializer' => '= 0',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::addFile',
    ),
    'addFromString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$localname',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$contents',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::addFromString',
    ),
    'addGlob' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= 0',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::addGlob',
    ),
    'addPattern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'initializer' => '= "."',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::addPattern',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::close',
    ),
    'deleteIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::deleteIndex',
    ),
    'deleteName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::deleteName',
    ),
    'extractTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$destination',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$entries',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::extractTo',
    ),
    'getArchiveComment' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'ZipArchive::getArchiveComment',
    ),
    'getCommentIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'ZipArchive::getCommentIndex',
    ),
    'getCommentName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'ZipArchive::getCommentName',
    ),
    'GetExternalAttributesIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '&$opsys',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '&$attr',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::GetExternalAttributesIndex',
    ),
    'getExternalAttributesName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '&$opsys',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '&$attr',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::getExternalAttributesName',
    ),
    'getFromIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'initializer' => '= 0',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'ZipArchive::getFromIndex',
    ),
    'getFromName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'initializer' => '= 0',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'ZipArchive::getFromName',
    ),
    'getNameIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'ZipArchive::getNameIndex',
    ),
    'getStatusString' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'ZipArchive::getStatusString',
    ),
    'getStream' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'resource',
      'name' => 'ZipArchive::getStream',
    ),
    'locateName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'ZipArchive::locateName',
    ),
    'open' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'mixed',
      'name' => 'ZipArchive::open',
    ),
    'renameIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$newname',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::renameIndex',
    ),
    'renameName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$newname',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::renameName',
    ),
    'setArchiveComment' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$comment',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::setArchiveComment',
    ),
    'setCommentIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$comment',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::setCommentIndex',
    ),
    'setCommentName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$comment',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::setCommentName',
    ),
    'setExternalAttributesIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$opsys',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::setExternalAttributesIndex',
    ),
    'setExternalAttributesName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$opsys',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::setExternalAttributesName',
    ),
    'setPassword' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'ZipArchive::setPassword',
    ),
    'statIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'ZipArchive::statIndex',
    ),
    'statName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'ZipArchive::statName',
    ),
    'unchangeAll' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::unchangeAll',
    ),
    'unchangeArchive' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::unchangeArchive',
    ),
    'unchangeIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::unchangeIndex',
    ),
    'unchangeName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ZipArchive::unchangeName',
    ),
  ),
  'PDO' => 
  array (
    'beginTransaction' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::beginTransaction',
    ),
    'commit' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::commit',
    ),
    'errorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'PDO::errorCode',
    ),
    'errorInfo' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'PDO::errorInfo',
    ),
    'exec' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$statement',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'PDO::exec',
    ),
    'getAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attribute',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'PDO::getAttribute',
    ),
    'getAvailableDrivers' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'PDO::getAvailableDrivers',
    ),
    'inTransaction' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::inTransaction',
    ),
    'lastInsertId' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'PDO::lastInsertId',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$statement',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$driver_options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'PDOStatement',
      'name' => 'PDO::prepare',
    ),
    'query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$statement',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$PDO::FETCH_INTO',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'PDOStatement',
      'name' => 'PDO::query',
    ),
    'quote' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$parameter_type',
          'initializer' => '= PDO::PARAM_STR',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'PDO::quote',
    ),
    'rollBack' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::rollBack',
    ),
    'setAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attribute',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::setAttribute',
    ),
    'cubrid_schema' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$schema_type',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$table_name',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$col_name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'PDO::cubrid_schema',
    ),
    'pgsqlGetNotify' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= PDO::FETCH_USE_DEFAULT',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$ms_timeout',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'PDO::pgsqlGetNotify',
    ),
    'pgsqlGetPid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'PDO::pgsqlGetPid',
    ),
    'pgsqlLOBCreate' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'PDO::pgsqlLOBCreate',
    ),
    'pgsqlLOBOpen' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$oid',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$mode',
          'initializer' => '= "rb"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'resource',
      'name' => 'PDO::pgsqlLOBOpen',
    ),
    'pgsqlLOBUnlink' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$oid',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::pgsqlLOBUnlink',
    ),
    'sqliteCreateAggregate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$function_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$step_func',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$finalize_func',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$num_args',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::sqliteCreateAggregate',
    ),
    'sqliteCreateFunction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$function_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$num_args',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDO::sqliteCreateFunction',
    ),
  ),
  'PDOStatement' => 
  array (
    'bindColumn' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$column',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$param',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$maxlen',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'mixed',
          'name' => '$driverdata',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::bindColumn',
    ),
    'bindParam' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$parameter',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$variable',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$data_type',
          'initializer' => '= PDO::PARAM_STR',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'mixed',
          'name' => '$driver_options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::bindParam',
    ),
    'bindValue' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$parameter',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$data_type',
          'initializer' => '= PDO::PARAM_STR',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::bindValue',
    ),
    'closeCursor' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::closeCursor',
    ),
    'columnCount' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'PDOStatement::columnCount',
    ),
    'debugDumpParams' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'PDOStatement::debugDumpParams',
    ),
    'errorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'PDOStatement::errorCode',
    ),
    'errorInfo' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'PDOStatement::errorInfo',
    ),
    'execute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$input_parameters',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::execute',
    ),
    'fetch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fetch_style',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$cursor_orientation',
          'initializer' => '= PDO::FETCH_ORI_NEXT',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$cursor_offset',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'PDOStatement::fetch',
    ),
    'fetchAll' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fetch_style',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$fetch_argument',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$ctor_args',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'PDOStatement::fetchAll',
    ),
    'fetchColumn' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$column_number',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'PDOStatement::fetchColumn',
    ),
    'fetchObject' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'initializer' => '= "stdClass"',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$ctor_args',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'PDOStatement::fetchObject',
    ),
    'getAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attribute',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'PDOStatement::getAttribute',
    ),
    'getColumnMeta' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$column',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'PDOStatement::getColumnMeta',
    ),
    'nextRowset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::nextRowset',
    ),
    'rowCount' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'PDOStatement::rowCount',
    ),
    'setAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attribute',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::setAttribute',
    ),
    'setFetchMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$PDO::FETCH_INTO',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'PDOStatement::setFetchMode',
    ),
  ),
  'maxdb' => 
  array (
    'auto_commit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::auto_commit',
    ),
    'change_user' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$user',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$database',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::change_user',
    ),
    'character_set_name' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'maxdb::character_set_name',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb::close',
    ),
    'commit' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb::commit',
    ),
    'disable_reads_from_master' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'maxdb::disable_reads_from_master',
    ),
    'field_count' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'maxdb::field_count',
    ),
    'kill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$processid',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::kill',
    ),
    'multi_query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::multi_query',
    ),
    'options' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$option',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::options',
    ),
    'ping' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb::ping',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'maxdb_stmt',
      'name' => 'maxdb::prepare',
    ),
    'query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'maxdb::query',
    ),
    'real_connect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$hostname',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$username',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$passwd',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$dbname',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$port',
          'initializer' => '= 0',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'string',
          'name' => '$socket',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::real_connect',
    ),
    'real_escape_string' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$escapestr',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'maxdb::real_escape_string',
    ),
    'real_query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::real_query',
    ),
    'rollback' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb::rollback',
    ),
    'rpl_query_type' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'maxdb::rpl_query_type',
    ),
    'send_query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::send_query',
    ),
    'ssl_set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$cert',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$ca',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$capath',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$cipher',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb::ssl_set',
    ),
    'stat' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'maxdb::stat',
    ),
    'stmt_init' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'maxdb::stmt_init',
    ),
    'store_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'maxdb::store_result',
    ),
    'use_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'resource',
      'name' => 'maxdb::use_result',
    ),
  ),
  'maxdb_result' => 
  array (
    'data_seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb_result::data_seek',
    ),
    'fetch_array' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$resulttype',
          'required' => false,
        ),
      ),
      'type' => 'mixed',
      'name' => 'maxdb_result::fetch_array',
    ),
    'fetch_assoc' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'maxdb_result::fetch_assoc',
    ),
    'fetch_field_direct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fieldnr',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'maxdb_result::fetch_field_direct',
    ),
    'fetch_field' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mixed',
      'name' => 'maxdb_result::fetch_field',
    ),
    'fetch_fields' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mixed',
      'name' => 'maxdb_result::fetch_fields',
    ),
    'fetch_object' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'maxdb_result::fetch_object',
    ),
    'fetch_row' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mixed',
      'name' => 'maxdb_result::fetch_row',
    ),
    'field_seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fieldnr',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb_result::field_seek',
    ),
    'free' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'maxdb_result::free',
    ),
  ),
  'maxdb_stmt' => 
  array (
    'bind_param' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$types',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '&$var',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::bind_param',
    ),
    'bind_result' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '&$var1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$...',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::bind_result',
    ),
    'close_long_data' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::close_long_data',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::close',
    ),
    'data_seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::data_seek',
    ),
    'execute' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::execute',
    ),
    'fetch' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::fetch',
    ),
    'free_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'maxdb_stmt::free_result',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'maxdb_stmt::prepare',
    ),
    'reset' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::reset',
    ),
    'result_metadata' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'resource',
      'name' => 'maxdb_stmt::result_metadata',
    ),
    'stmt_send_long_data' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$param_nr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'maxdb_stmt::stmt_send_long_data',
    ),
    'store_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'maxdb_stmt::store_result',
    ),
  ),
  'MongoClient' => 
  array (
    'close' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'boolean|string',
          'name' => '$connection',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoClient::close',
    ),
    'connect' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoClient::connect',
    ),
    'dropDB' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$db',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoClient::dropDB',
    ),
    '__get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dbname',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoDB',
      'name' => 'MongoClient::__get',
    ),
    'getConnections' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoClient::getConnections',
    ),
    'getHosts' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoClient::getHosts',
    ),
    'getReadPreference' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoClient::getReadPreference',
    ),
    'getWriteConcern' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoClient::getWriteConcern',
    ),
    'killCursor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$server_hash',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int|MongoInt64',
          'name' => '$id',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoClient::killCursor',
    ),
    'listDBs' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoClient::listDBs',
    ),
    'selectCollection' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$db',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$collection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCollection',
      'name' => 'MongoClient::selectCollection',
    ),
    'selectDB' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoDB',
      'name' => 'MongoClient::selectDB',
    ),
    'setReadPreference' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$read_preference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tags',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoClient::setReadPreference',
    ),
    'setWriteConcern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$w',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$wtimeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoClient::setWriteConcern',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoClient::__toString',
    ),
  ),
  'MongoDB' => 
  array (
    'authenticate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$username',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::authenticate',
    ),
    'command' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$command',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '&$hash',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::command',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoClient',
          'name' => '$conn',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoDB::__construct',
      'type' => 'MongoClient',
    ),
    'createCollection' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$capped',
          'initializer' => '= FALSE',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$size',
          'initializer' => '= 0',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$max',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCollection',
      'name' => 'MongoDB::createCollection',
    ),
    'createDBRef' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$collection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$document_or_id',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::createDBRef',
    ),
    'drop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::drop',
    ),
    'dropCollection' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$coll',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::dropCollection',
    ),
    'execute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$code',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$args',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::execute',
    ),
    'forceError' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoDB::forceError',
    ),
    '__get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCollection',
      'name' => 'MongoDB::__get',
    ),
    'getCollectionInfo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::getCollectionInfo',
    ),
    'getCollectionNames' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::getCollectionNames',
    ),
    'getDBRef' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$ref',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::getDBRef',
    ),
    'getGridFS' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$prefix',
          'initializer' => '= "fs"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoGridFS',
      'name' => 'MongoDB::getGridFS',
    ),
    'getProfilingLevel' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoDB::getProfilingLevel',
    ),
    'getReadPreference' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::getReadPreference',
    ),
    'getSlaveOkay' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoDB::getSlaveOkay',
    ),
    'getWriteConcern' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::getWriteConcern',
    ),
    'lastError' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::lastError',
    ),
    'listCollections' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::listCollections',
    ),
    'prevError' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::prevError',
    ),
    'repair' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$preserve_cloned_files',
          'initializer' => '= FALSE',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$backup_original_files',
          'initializer' => '= FALSE',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::repair',
    ),
    'resetError' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDB::resetError',
    ),
    'selectCollection' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCollection',
      'name' => 'MongoDB::selectCollection',
    ),
    'setProfilingLevel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$level',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoDB::setProfilingLevel',
    ),
    'setReadPreference' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$read_preference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tags',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoDB::setReadPreference',
    ),
    'setSlaveOkay' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$ok',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoDB::setSlaveOkay',
    ),
    'setWriteConcern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$w',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$wtimeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoDB::setWriteConcern',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoDB::__toString',
    ),
  ),
  'MongoCollection' => 
  array (
    'aggregate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$op',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$op',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$...',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::aggregate',
    ),
    'aggregateCursor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$command',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCommandCursor',
      'name' => 'MongoCollection::aggregateCursor',
    ),
    'batchInsert' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'MongoCollection::batchInsert',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoDB',
          'name' => '$db',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoCollection::__construct',
      'type' => 'MongoDB',
    ),
    'count' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoCollection::count',
    ),
    'createDBRef' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$document_or_id',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::createDBRef',
    ),
    'createIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCollection::createIndex',
    ),
    'deleteIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string|array',
          'name' => '$keys',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::deleteIndex',
    ),
    'deleteIndexes' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::deleteIndexes',
    ),
    'distinct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::distinct',
    ),
    'drop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::drop',
    ),
    'ensureIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string|array',
          'name' => '$key|keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCollection::ensureIndex',
    ),
    'find' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCollection::find',
    ),
    'findAndModify' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$update',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::findAndModify',
    ),
    'findOne' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'initializer' => '= array()',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::findOne',
    ),
    '__get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCollection',
      'name' => 'MongoCollection::__get',
    ),
    'getDBRef' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$ref',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::getDBRef',
    ),
    'getIndexInfo' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::getIndexInfo',
    ),
    'getName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoCollection::getName',
    ),
    'getReadPreference' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::getReadPreference',
    ),
    'getSlaveOkay' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCollection::getSlaveOkay',
    ),
    'getWriteConcern' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::getWriteConcern',
    ),
    'group' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$initial',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'MongoCode',
          'name' => '$reduce',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::group',
    ),
    'insert' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array|object',
          'name' => '$document',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool|array',
      'name' => 'MongoCollection::insert',
    ),
    'parallelCollectionScan' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$num_cursors',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array[MongoCommandCursor]',
      'name' => 'MongoCollection::parallelCollectionScan',
    ),
    'remove' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$criteria',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool|array',
      'name' => 'MongoCollection::remove',
    ),
    'save' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array|object',
          'name' => '$document',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'MongoCollection::save',
    ),
    'setReadPreference' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$read_preference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tags',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCollection::setReadPreference',
    ),
    'setSlaveOkay' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$ok',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCollection::setSlaveOkay',
    ),
    'setWriteConcern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$w',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$wtimeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCollection::setWriteConcern',
    ),
    'toIndexString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
      ),
      'modifier' => 'static protected',
      'type' => 'string',
      'name' => 'MongoCollection::toIndexString',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoCollection::__toString',
    ),
    'update' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$criteria',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$new_object',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool|array',
      'name' => 'MongoCollection::update',
    ),
    'validate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$scan_data',
          'initializer' => '= FALSE',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCollection::validate',
    ),
  ),
  'MongoCursor' => 
  array (
    'addOption' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::addOption',
    ),
    'awaitData' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$wait',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::awaitData',
    ),
    'batchSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$batchSize',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::batchSize',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoClient',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$ns',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'initializer' => '= array()',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoCursor::__construct',
      'type' => 'MongoClient',
    ),
    'count' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$foundOnly',
          'initializer' => '= FALSE',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoCursor::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCursor::current',
    ),
    'dead' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCursor::dead',
    ),
    'doQuery' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'protected',
      'type' => 'void',
      'name' => 'MongoCursor::doQuery',
    ),
    'explain' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCursor::explain',
    ),
    'fields' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$f',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::fields',
    ),
    'getNext' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCursor::getNext',
    ),
    'getReadPreference' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCursor::getReadPreference',
    ),
    'hasNext' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCursor::hasNext',
    ),
    'hint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::hint',
    ),
    'immortal' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$liveForever',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::immortal',
    ),
    'info' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCursor::info',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string|int',
      'name' => 'MongoCursor::key',
    ),
    'limit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$num',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::limit',
    ),
    'maxTimeMS' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$ms',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::maxTimeMS',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCursor::next',
    ),
    'partial' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$okay',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::partial',
    ),
    'reset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MongoCursor::reset',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MongoCursor::rewind',
    ),
    'setFlag' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flag',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$set',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::setFlag',
    ),
    'setReadPreference' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$read_preference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tags',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::setReadPreference',
    ),
    'skip' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$num',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::skip',
    ),
    'slaveOkay' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$okay',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::slaveOkay',
    ),
    'snapshot' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::snapshot',
    ),
    'sort' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::sort',
    ),
    'tailable' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$tail',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::tailable',
    ),
    'timeout' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$ms',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCursor',
      'name' => 'MongoCursor::timeout',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCursor::valid',
    ),
  ),
  'MongoCursorInterface' => 
  array (
    'batchSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$batchSize',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'MongoCursorInterface',
      'name' => 'MongoCursorInterface::batchSize',
    ),
    'dead' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'bool',
      'name' => 'MongoCursorInterface::dead',
    ),
    'getReadPreference' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'array',
      'name' => 'MongoCursorInterface::getReadPreference',
    ),
    'info' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'array',
      'name' => 'MongoCursorInterface::info',
    ),
    'setReadPreference' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$read_preference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tags',
          'required' => false,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'MongoCursorInterface',
      'name' => 'MongoCursorInterface::setReadPreference',
    ),
    'timeout' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$ms',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'MongoCursorInterface',
      'name' => 'MongoCursorInterface::timeout',
    ),
  ),
  'MongoCommandCursor' => 
  array (
    'batchSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$batchSize',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCommandCursor',
      'name' => 'MongoCommandCursor::batchSize',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoClient',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$ns',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$command',
          'initializer' => '= array()',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoCommandCursor::__construct',
      'type' => 'MongoClient',
    ),
    'createFromDocument' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoClient',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$hash',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$document',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCommandCursor',
      'name' => 'MongoCommandCursor::createFromDocument',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCommandCursor::current',
    ),
    'dead' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCommandCursor::dead',
    ),
    'getReadPreference' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCommandCursor::getReadPreference',
    ),
    'info' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCommandCursor::info',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoCommandCursor::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MongoCommandCursor::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoCommandCursor::rewind',
    ),
    'setReadPreference' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$read_preference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tags',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCommandCursor',
      'name' => 'MongoCommandCursor::setReadPreference',
    ),
    'timeout' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$ms',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoCommandCursor',
      'name' => 'MongoCommandCursor::timeout',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoCommandCursor::valid',
    ),
  ),
  'MongoId' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$id',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoId::__construct',
      'type' => 'string',
    ),
    'getHostname' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoId::getHostname',
    ),
    'getInc' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoId::getInc',
    ),
    'getPID' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoId::getPID',
    ),
    'getTimestamp' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoId::getTimestamp',
    ),
    'isValid' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoId::isValid',
    ),
    '__set_state' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$props',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoId',
      'name' => 'MongoId::__set_state',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoId::__toString',
    ),
  ),
  'MongoCode' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$code',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$scope',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoCode::__construct',
      'type' => 'string',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoCode::__toString',
    ),
  ),
  'MongoDate' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$sec',
          'initializer' => '= time()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$usec',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoDate::__construct',
      'type' => 'int',
    ),
    'toDateTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoDate::toDateTime',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoDate::__toString',
    ),
  ),
  'MongoRegex' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$regex',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoRegex::__construct',
      'type' => 'string',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoRegex::__toString',
    ),
  ),
  'MongoBinData' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoBinData::__construct',
      'type' => 'string',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoBinData::__toString',
    ),
  ),
  'MongoInt32' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoInt32::__construct',
      'type' => 'string',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoInt32::__toString',
    ),
  ),
  'MongoInt64' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoInt64::__construct',
      'type' => 'string',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoInt64::__toString',
    ),
  ),
  'MongoDBRef' => 
  array (
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$collection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$id',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$database',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDBRef::create',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoDB',
          'name' => '$db',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$ref',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoDBRef::get',
    ),
    'isRef' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$ref',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoDBRef::isRef',
    ),
  ),
  'MongoTimestamp' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$sec',
          'initializer' => '= time()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$inc',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoTimestamp::__construct',
      'type' => 'int',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoTimestamp::__toString',
    ),
  ),
  'MongoGridFS' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoDB',
          'name' => '$db',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$prefix',
          'initializer' => '= "fs"',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$chunks',
          'initializer' => '= "fs"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoGridFS::__construct',
      'type' => 'MongoDB',
    ),
    'delete' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$id',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool|array',
      'name' => 'MongoGridFS::delete',
    ),
    'drop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoGridFS::drop',
    ),
    'find' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoGridFSCursor',
      'name' => 'MongoGridFS::find',
    ),
    'findOne' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$query',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$fields',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoGridFSFile',
      'name' => 'MongoGridFS::findOne',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$id',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MongoGridFSFile',
      'name' => 'MongoGridFS::get',
    ),
    'put' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$metadata',
          'initializer' => '= array()',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'MongoGridFS::put',
    ),
    'remove' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$criteria',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool|array',
      'name' => 'MongoGridFS::remove',
    ),
    'storeBytes' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$bytes',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$metadata',
          'initializer' => '= array()',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'MongoGridFS::storeBytes',
    ),
    'storeFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$metadata',
          'initializer' => '= array()',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'initializer' => '= array()',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'MongoGridFS::storeFile',
    ),
    'storeUpload' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$metadata',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'MongoGridFS::storeUpload',
    ),
  ),
  'MongoGridfsFile' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoGridFS',
          'name' => '$gridfs',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$file',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoGridfsFile::__construct',
      'type' => 'MongoGridFS',
    ),
  ),
  'MongoGridFSFile' => 
  array (
    'getBytes' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoGridFSFile::getBytes',
    ),
    'getFilename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoGridFSFile::getFilename',
    ),
    'getResource' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'resource',
      'name' => 'MongoGridFSFile::getResource',
    ),
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoGridFSFile::getSize',
    ),
    'write' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoGridFSFile::write',
    ),
  ),
  'MongoGridFSCursor' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoGridFS',
          'name' => '$gridfs',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'resource',
          'name' => '$connection',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$ns',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoGridFSCursor::__construct',
      'type' => 'MongoGridFS',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'MongoGridFSFile',
      'name' => 'MongoGridFSCursor::current',
    ),
    'getNext' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'MongoGridFSFile',
      'name' => 'MongoGridFSCursor::getNext',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoGridFSCursor::key',
    ),
  ),
  'MongoWriteBatch' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$item',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoWriteBatch::add',
    ),
    'execute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$write_options',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'array',
      'name' => 'MongoWriteBatch::execute',
    ),
  ),
  'MongoInsertBatch' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoCollection',
          'name' => '$collection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$write_options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoInsertBatch::__construct',
      'type' => 'MongoCollection',
    ),
  ),
  'MongoUpdateBatch' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoCollection',
          'name' => '$collection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$write_options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoUpdateBatch::__construct',
      'type' => 'MongoCollection',
    ),
  ),
  'MongoDeleteBatch' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MongoCollection',
          'name' => '$collection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$write_options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'MongoDeleteBatch::__construct',
      'type' => 'MongoCollection',
    ),
  ),
  'MongoLog' => 
  array (
    'getCallback' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'callable',
      'name' => 'MongoLog::getCallback',
    ),
    'getLevel' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoLog::getLevel',
    ),
    'getModule' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoLog::getModule',
    ),
    'setCallback' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$log_function',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MongoLog::setCallback',
    ),
    'setLevel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$level',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MongoLog::setLevel',
    ),
    'setModule' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$module',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MongoLog::setModule',
    ),
  ),
  'MongoPool' => 
  array (
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MongoPool::getSize',
    ),
    'info' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoPool::info',
    ),
    'setSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$size',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MongoPool::setSize',
    ),
  ),
  'Mongo' => 
  array (
    'connectUtil' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'protected',
      'type' => 'bool',
      'name' => 'Mongo::connectUtil',
    ),
    'getPoolSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Mongo::getPoolSize',
    ),
    'getSlave' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Mongo::getSlave',
    ),
    'getSlaveOkay' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Mongo::getSlaveOkay',
    ),
    'poolDebug' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Mongo::poolDebug',
    ),
    'setPoolSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$size',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Mongo::setPoolSize',
    ),
    'setSlaveOkay' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$ok',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Mongo::setSlaveOkay',
    ),
    'switchSlave' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Mongo::switchSlave',
    ),
  ),
  'MongoResultException' => 
  array (
    'getDocument' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoResultException::getDocument',
    ),
  ),
  'MongoCursorException' => 
  array (
    'getHost' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MongoCursorException::getHost',
    ),
  ),
  'MongoWriteConcernException' => 
  array (
    'getDocument' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MongoWriteConcernException::getDocument',
    ),
  ),
  'mysqli' => 
  array (
    'autocommit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::autocommit',
    ),
    'begin_transaction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'mysqli::begin_transaction',
    ),
    'change_user' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$user',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$database',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::change_user',
    ),
    'character_set_name' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'mysqli::character_set_name',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli::close',
    ),
    'commit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::commit',
    ),
    'debug' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$message',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::debug',
    ),
    'dump_debug_info' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli::dump_debug_info',
    ),
    'get_charset' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'mysqli::get_charset',
    ),
    'get_client_info' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'mysqli::get_client_info',
    ),
    'get_connection_stats' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli::get_connection_stats',
    ),
    'get_warnings' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mysqli_warning',
      'name' => 'mysqli::get_warnings',
    ),
    'init' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mysqli',
      'name' => 'mysqli::init',
    ),
    'kill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$processid',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::kill',
    ),
    'more_results' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli::more_results',
    ),
    'multi_query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::multi_query',
    ),
    'next_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli::next_result',
    ),
    'options' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$option',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::options',
    ),
    'ping' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli::ping',
    ),
    'poll' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '&$read',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '&$error',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '&$reject',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$sec',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$usec',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'mysqli::poll',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'mysqli_stmt',
      'name' => 'mysqli::prepare',
    ),
    'query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$resultmode',
          'initializer' => '= MYSQLI_STORE_RESULT',
          'required' => false,
        ),
      ),
      'type' => 'mixed',
      'name' => 'mysqli::query',
    ),
    'real_connect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$host',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$username',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$passwd',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$dbname',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$port',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'string',
          'name' => '$socket',
          'required' => false,
        ),
        6 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::real_connect',
    ),
    'escape_string' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$escapestr',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'mysqli::escape_string',
    ),
    'real_escape_string' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$escapestr',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'mysqli::real_escape_string',
    ),
    'real_query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::real_query',
    ),
    'reap_async_query' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mysqli_result',
      'name' => 'mysqli::reap_async_query',
    ),
    'refresh' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'mysqli::refresh',
    ),
    'release_savepoint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'mysqli::release_savepoint',
    ),
    'rollback' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::rollback',
    ),
    'rpl_query_type' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'mysqli::rpl_query_type',
    ),
    'savepoint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'mysqli::savepoint',
    ),
    'select_db' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dbname',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::select_db',
    ),
    'send_query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::send_query',
    ),
    'set_charset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$charset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::set_charset',
    ),
    'set_local_infile_handler' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqli',
          'name' => '$link',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$read_func',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::set_local_infile_handler',
    ),
    'ssl_set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$cert',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$ca',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$capath',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$cipher',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli::ssl_set',
    ),
    'stat' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'mysqli::stat',
    ),
    'stmt_init' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mysqli_stmt',
      'name' => 'mysqli::stmt_init',
    ),
    'store_result' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$option',
          'required' => false,
        ),
      ),
      'type' => 'mysqli_result',
      'name' => 'mysqli::store_result',
    ),
    'use_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mysqli_result',
      'name' => 'mysqli::use_result',
    ),
    'disable_reads_from_master' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'mysqli::disable_reads_from_master',
    ),
  ),
  'mysqli_stmt' => 
  array (
    'attr_get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'mysqli_stmt::attr_get',
    ),
    'attr_set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::attr_set',
    ),
    'bind_param' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$types',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$var1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '&$...',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::bind_param',
    ),
    'bind_result' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '&$var1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$...',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::bind_result',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::close',
    ),
    'data_seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'mysqli_stmt::data_seek',
    ),
    'execute' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::execute',
    ),
    'fetch' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::fetch',
    ),
    'free_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'mysqli_stmt::free_result',
    ),
    'get_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mysqli_result',
      'name' => 'mysqli_stmt::get_result',
    ),
    'get_warnings' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqli_stmt',
          'name' => '$stmt',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'mysqli_stmt::get_warnings',
    ),
    'more_results' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'mysqli_stmt::more_results',
    ),
    'next_result' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'mysqli_stmt::next_result',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'mysqli_stmt::prepare',
    ),
    'reset' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::reset',
    ),
    'result_metadata' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mysqli_result',
      'name' => 'mysqli_stmt::result_metadata',
    ),
    'send_long_data' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$param_nr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::send_long_data',
    ),
    'store_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'mysqli_stmt::store_result',
    ),
  ),
  'mysqli_result' => 
  array (
    'data_seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli_result::data_seek',
    ),
    'fetch_all' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$resulttype',
          'initializer' => '= MYSQLI_NUM',
          'required' => false,
        ),
      ),
      'type' => 'mixed',
      'name' => 'mysqli_result::fetch_all',
    ),
    'fetch_array' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$resulttype',
          'initializer' => '= MYSQLI_BOTH',
          'required' => false,
        ),
      ),
      'type' => 'mixed',
      'name' => 'mysqli_result::fetch_array',
    ),
    'fetch_assoc' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'mysqli_result::fetch_assoc',
    ),
    'fetch_field_direct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fieldnr',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'mysqli_result::fetch_field_direct',
    ),
    'fetch_field' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'mysqli_result::fetch_field',
    ),
    'fetch_fields' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'mysqli_result::fetch_fields',
    ),
    'fetch_object' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'initializer' => '= "stdClass"',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$params',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'mysqli_result::fetch_object',
    ),
    'fetch_row' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mixed',
      'name' => 'mysqli_result::fetch_row',
    ),
    'field_seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fieldnr',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli_result::field_seek',
    ),
    'free' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'mysqli_result::free',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'mysqli_result::close',
    ),
    'free_result' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'mysqli_result::free_result',
    ),
  ),
  'mysqli_driver' => 
  array (
    'embedded_server_end' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'mysqli_driver::embedded_server_end',
    ),
    'embedded_server_start' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$start',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$arguments',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$groups',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'mysqli_driver::embedded_server_start',
    ),
  ),
  'mysqli_warning' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'mysqli_warning::__construct',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'mysqli_warning::next',
    ),
  ),
  'MysqlndUhConnection' => 
  array (
    'changeUser' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$user',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$database',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$silent',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$passwd_len',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::changeUser',
    ),
    'charsetName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::charsetName',
    ),
    'close' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$close_type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::close',
    ),
    'connect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$host',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$use"',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$password',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$database',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$port',
          'required' => true,
        ),
        6 => 
        array (
          'type' => 'string',
          'name' => '$socket',
          'required' => true,
        ),
        7 => 
        array (
          'type' => 'int',
          'name' => '$mysql_flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::connect',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'MysqlndUhConnection::__construct',
    ),
    'endPSession' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::endPSession',
    ),
    'escapeString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$escape_string',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::escapeString',
    ),
    'getAffectedRows' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MysqlndUhConnection::getAffectedRows',
    ),
    'getErrorNumber' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MysqlndUhConnection::getErrorNumber',
    ),
    'getErrorString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::getErrorString',
    ),
    'getFieldCount' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MysqlndUhConnection::getFieldCount',
    ),
    'getHostInformation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::getHostInformation',
    ),
    'getLastInsertId' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MysqlndUhConnection::getLastInsertId',
    ),
    'getLastMessage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MysqlndUhConnection::getLastMessage',
    ),
    'getProtocolInformation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::getProtocolInformation',
    ),
    'getServerInformation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::getServerInformation',
    ),
    'getServerStatistics' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::getServerStatistics',
    ),
    'getServerVersion' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MysqlndUhConnection::getServerVersion',
    ),
    'getSqlstate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MysqlndUhConnection::getSqlstate',
    ),
    'getStatistics' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MysqlndUhConnection::getStatistics',
    ),
    'getThreadId' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MysqlndUhConnection::getThreadId',
    ),
    'getWarningCount' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MysqlndUhConnection::getWarningCount',
    ),
    'init' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::init',
    ),
    'killConnection' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$pid',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::killConnection',
    ),
    'listFields' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$table',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$achtung_wild',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MysqlndUhConnection::listFields',
    ),
    'listMethod' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$achtung_wild',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$par1',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MysqlndUhConnection::listMethod',
    ),
    'moreResults' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::moreResults',
    ),
    'nextResult' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::nextResult',
    ),
    'ping' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::ping',
    ),
    'query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::query',
    ),
    'queryReadResultsetHeader' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mysqlnd_statement',
          'name' => '$mysqlnd_stmt',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::queryReadResultsetHeader',
    ),
    'reapQuery' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::reapQuery',
    ),
    'refreshServer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::refreshServer',
    ),
    'restartPSession' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::restartPSession',
    ),
    'selectDb' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$database',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::selectDb',
    ),
    'sendClose' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::sendClose',
    ),
    'sendQuery' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::sendQuery',
    ),
    'serverDumpDebugInformation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::serverDumpDebugInformation',
    ),
    'setAutocommit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::setAutocommit',
    ),
    'setCharset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$charset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::setCharset',
    ),
    'setClientOption' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$option',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::setClientOption',
    ),
    'setServerOption' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$option',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MysqlndUhConnection::setServerOption',
    ),
    'shutdownServer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$MYSQLND_UH_RES_MYSQLND_NAME',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$"level"',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MysqlndUhConnection::shutdownServer',
    ),
    'simpleCommand' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$command',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$arg',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$ok_packet',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$silent',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'bool',
          'name' => '$ignore_upsert_status',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::simpleCommand',
    ),
    'simpleCommandHandleResponse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$ok_packet',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$silent',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$command',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$ignore_upsert_status',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::simpleCommandHandleResponse',
    ),
    'sslSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$cert',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$ca',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$capath',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'string',
          'name' => '$cipher',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::sslSet',
    ),
    'stmtInit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'resource',
      'name' => 'MysqlndUhConnection::stmtInit',
    ),
    'storeResult' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'resource',
      'name' => 'MysqlndUhConnection::storeResult',
    ),
    'txCommit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::txCommit',
    ),
    'txRollback' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhConnection::txRollback',
    ),
    'useResult' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_connection',
          'name' => '$connection',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'resource',
      'name' => 'MysqlndUhConnection::useResult',
    ),
  ),
  'MysqlndUhPreparedStatement' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'MysqlndUhPreparedStatement::__construct',
    ),
    'execute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_prepared_statement',
          'name' => '$statement',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhPreparedStatement::execute',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mysqlnd_prepared_statement',
          'name' => '$statement',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MysqlndUhPreparedStatement::prepare',
    ),
  ),
  'OCI-Collection' => 
  array (
    'append' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Collection::append',
    ),
    'assign' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'OCI-Collection',
          'name' => '$from',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Collection::assign',
    ),
    'assignElem' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Collection::assignElem',
    ),
    'free' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'OCI-Collection::free',
    ),
    'getElem' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'OCI-Collection::getElem',
    ),
    'max' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'OCI-Collection::max',
    ),
    'size' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'OCI-Collection::size',
    ),
    'trim' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$num',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Collection::trim',
    ),
  ),
  'OCI-Lob' => 
  array (
    'append' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'OCI-Lob',
          'name' => '$lob_from',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::append',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::close',
    ),
    'eof' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::eof',
    ),
    'erase' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'OCI-Lob::erase',
    ),
    'export' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$start',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::export',
    ),
    'flush' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flag',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::flush',
    ),
    'free' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::free',
    ),
    'getBuffering' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::getBuffering',
    ),
    'import' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::import',
    ),
    'load' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'OCI-Lob::load',
    ),
    'read' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'OCI-Lob::read',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::rewind',
    ),
    'save' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::save',
    ),
    'seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$whence',
          'initializer' => '= OCI_SEEK_SET',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::seek',
    ),
    'setBuffering' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$on_off',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::setBuffering',
    ),
    'size' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'OCI-Lob::size',
    ),
    'tell' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'OCI-Lob::tell',
    ),
    'truncate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::truncate',
    ),
    'write' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'OCI-Lob::write',
    ),
    'writeTemporary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$lob_type',
          'initializer' => '= OCI_TEMP_CLOB',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'OCI-Lob::writeTemporary',
    ),
  ),
  'SQLiteDatabase' => 
  array (
    'arrayQuery' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SQLiteDatabase::arrayQuery',
    ),
    'busyTimeout' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$milliseconds',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SQLiteDatabase::busyTimeout',
    ),
    'changes' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLiteDatabase::changes',
    ),
    'createAggregate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$function_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$step_func',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$finalize_func',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$num_args',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SQLiteDatabase::createAggregate',
    ),
    'createFunction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$function_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$num_args',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SQLiteDatabase::createFunction',
    ),
    'queryExec' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '&$error_msg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLiteDatabase::queryExec',
    ),
    'fetchColumnTypes' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$table_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_ASSOC',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SQLiteDatabase::fetchColumnTypes',
    ),
    'lastError' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLiteDatabase::lastError',
    ),
    'lastInsertRowid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLiteDatabase::lastInsertRowid',
    ),
    'query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '&$error_msg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SQLiteResult',
      'name' => 'SQLiteDatabase::query',
    ),
    'singleQuery' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$first_row_only',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SQLiteDatabase::singleQuery',
    ),
    'unbufferedQuery' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '&$error_msg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SQLiteUnbuffered',
      'name' => 'SQLiteDatabase::unbufferedQuery',
    ),
  ),
  'SQLiteResult' => 
  array (
    'column' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index_or_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'mixed',
      'name' => 'SQLiteResult::column',
    ),
    'current' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'SQLiteResult::current',
    ),
    'fetchAll' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'SQLiteResult::fetchAll',
    ),
    'fetch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'SQLiteResult::fetch',
    ),
    'fetchObject' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$ctor_params',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'SQLiteResult::fetchObject',
    ),
    'fetchSingle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'SQLiteResult::fetchSingle',
    ),
    'fieldName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field_index',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'SQLiteResult::fieldName',
    ),
    'hasPrev' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'SQLiteResult::hasPrev',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'SQLiteResult::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'SQLiteResult::next',
    ),
    'numFields' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'SQLiteResult::numFields',
    ),
    'numRows' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'SQLiteResult::numRows',
    ),
    'prev' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'SQLiteResult::prev',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'SQLiteResult::rewind',
    ),
    'seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$rownum',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'SQLiteResult::seek',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'SQLiteResult::valid',
    ),
  ),
  'SQLiteUnbuffered' => 
  array (
    'column' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index_or_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'mixed',
      'name' => 'SQLiteUnbuffered::column',
    ),
    'current' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'SQLiteUnbuffered::current',
    ),
    'fetchAll' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'SQLiteUnbuffered::fetchAll',
    ),
    'fetch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$result_type',
          'initializer' => '= SQLITE_BOTH',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'SQLiteUnbuffered::fetch',
    ),
    'fetchObject' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$ctor_params',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'SQLiteUnbuffered::fetchObject',
    ),
    'fetchSingle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$decode_binary',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'SQLiteUnbuffered::fetchSingle',
    ),
    'fieldName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field_index',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'SQLiteUnbuffered::fieldName',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'SQLiteUnbuffered::next',
    ),
    'numFields' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'SQLiteUnbuffered::numFields',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'SQLiteUnbuffered::valid',
    ),
  ),
  'SQLite3' => 
  array (
    'busyTimeout' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$msecs',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3::busyTimeout',
    ),
    'changes' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLite3::changes',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3::close',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$encryption_key',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SQLite3::__construct',
      'type' => 'string',
    ),
    'createAggregate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$step_callback',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$final_callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$argument_count',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3::createAggregate',
    ),
    'createCollation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3::createCollation',
    ),
    'createFunction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$callback',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$argument_count',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3::createFunction',
    ),
    'escapeString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SQLite3::escapeString',
    ),
    'exec' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3::exec',
    ),
    'lastErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLite3::lastErrorCode',
    ),
    'lastErrorMsg' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SQLite3::lastErrorMsg',
    ),
    'lastInsertRowID' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLite3::lastInsertRowID',
    ),
    'loadExtension' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$shared_library',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3::loadExtension',
    ),
    'open' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$encryption_key',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SQLite3::open',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SQLite3Stmt',
      'name' => 'SQLite3::prepare',
    ),
    'query' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SQLite3Result',
      'name' => 'SQLite3::query',
    ),
    'querySingle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$query',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$entire_row',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SQLite3::querySingle',
    ),
    'version' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SQLite3::version',
    ),
  ),
  'SQLite3Stmt' => 
  array (
    'bindParam' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$sql_param',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$param',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3Stmt::bindParam',
    ),
    'bindValue' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$sql_param',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3Stmt::bindValue',
    ),
    'clear' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3Stmt::clear',
    ),
    'close' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3Stmt::close',
    ),
    'execute' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'SQLite3Result',
      'name' => 'SQLite3Stmt::execute',
    ),
    'paramCount' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLite3Stmt::paramCount',
    ),
    'reset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3Stmt::reset',
    ),
  ),
  'SQLite3Result' => 
  array (
    'columnName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$column_number',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SQLite3Result::columnName',
    ),
    'columnType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$column_number',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLite3Result::columnType',
    ),
    'fetchArray' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'initializer' => '= SQLITE3_BOTH',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SQLite3Result::fetchArray',
    ),
    'finalize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3Result::finalize',
    ),
    'numColumns' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SQLite3Result::numColumns',
    ),
    'reset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SQLite3Result::reset',
    ),
  ),
  'TokyoTyrant' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'number',
          'name' => '$increment',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'number',
      'name' => 'TokyoTyrant::add',
    ),
    'connect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$host',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$port',
          'initializer' => '= TokyoTyrant::RDBDEF_PORT',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::connect',
    ),
    'connectUri' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$uri',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::connectUri',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$host',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$port',
          'initializer' => '= TokyoTyrant::RDBDEF_PORT',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'TokyoTyrant::__construct',
      'type' => 'string',
    ),
    'copy' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::copy',
    ),
    'ext' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'TokyoTyrant::ext',
    ),
    'fwmKeys' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$prefix',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$max_recs',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'TokyoTyrant::fwmKeys',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrant::get',
    ),
    'getIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrantIterator',
      'name' => 'TokyoTyrant::getIterator',
    ),
    'num' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'TokyoTyrant::num',
    ),
    'out' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::out',
    ),
    'put' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::put',
    ),
    'putCat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::putCat',
    ),
    'putKeep' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::putKeep',
    ),
    'putNr' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::putNr',
    ),
    'putShl' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrant::putShl',
    ),
    'restore' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$log_dir',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$timestamp',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$check_consistency',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrant::restore',
    ),
    'setMaster' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$host',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$port',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$timestamp',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$check_consistency',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrant::setMaster',
    ),
    'size' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'TokyoTyrant::size',
    ),
    'stat' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'TokyoTyrant::stat',
    ),
    'sync' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrant::sync',
    ),
    'tune' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$timeout',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'initializer' => '= TokyoTyrant::RDBT_RECON',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrant',
      'name' => 'TokyoTyrant::tune',
    ),
    'vanish' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrant::vanish',
    ),
  ),
  'TokyoTyrantTable' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$increment',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$type',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantTable::add',
    ),
    'genUid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'TokyoTyrantTable::genUid',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantTable::get',
    ),
    'getIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrantIterator',
      'name' => 'TokyoTyrantTable::getIterator',
    ),
    'getQuery' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrantQuery',
      'name' => 'TokyoTyrantTable::getQuery',
    ),
    'out' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantTable::out',
    ),
    'put' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$columns',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'TokyoTyrantTable::put',
    ),
    'putCat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$columns',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantTable::putCat',
    ),
    'putKeep' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$columns',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantTable::putKeep',
    ),
    'putNr' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$keys',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantTable::putNr',
    ),
    'putShl' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantTable::putShl',
    ),
    'setIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$column',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrantTable::setIndex',
    ),
  ),
  'TokyoTyrantQuery' => 
  array (
    'addCond' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$op',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$expr',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrantQuery::addCond',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'TokyoTyrantTable',
          'name' => '$table',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'TokyoTyrantQuery::__construct',
      'type' => 'TokyoTyrantTable',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'TokyoTyrantQuery::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'TokyoTyrantQuery::current',
    ),
    'hint' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'TokyoTyrantQuery::hint',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'TokyoTyrantQuery::key',
    ),
    'metaSearch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$queries',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'TokyoTyrantQuery::metaSearch',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'TokyoTyrantQuery::next',
    ),
    'out' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'TokyoTyrantQuery',
      'name' => 'TokyoTyrantQuery::out',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'TokyoTyrantQuery::rewind',
    ),
    'search' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'TokyoTyrantQuery::search',
    ),
    'setLimit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$max',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$skip',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrantQuery::setLimit',
    ),
    'setOrder' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrantQuery::setOrder',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'TokyoTyrantQuery::valid',
    ),
  ),
  'TokyoTyrantIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'TokyoTyrantIterator::__construct',
      'type' => 'mixed',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrantIterator::current',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrantIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'TokyoTyrantIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'TokyoTyrantIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'TokyoTyrantIterator::valid',
    ),
  ),
  'DateTime' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateInterval',
          'name' => '$interval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::add',
    ),
    'createFromFormat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$time',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'DateTimeZone',
          'name' => '$timezone',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::createFromFormat',
    ),
    'getLastErrors' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'DateTime::getLastErrors',
    ),
    'modify' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$modify',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::modify',
    ),
    '__set_state' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$array',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::__set_state',
    ),
    'setDate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$year',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$month',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$day',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::setDate',
    ),
    'setISODate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$year',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$week',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$day',
          'initializer' => '= 1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::setISODate',
    ),
    'setTime' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$hour',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$minute',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$second',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::setTime',
    ),
    'setTimestamp' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$unixtimestamp',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::setTimestamp',
    ),
    'setTimezone' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTimeZone',
          'name' => '$timezone',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::setTimezone',
    ),
    'sub' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateInterval',
          'name' => '$interval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'DateTime::sub',
    ),
    'diff' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTimeInterface',
          'name' => '$datetime2',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$absolute',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateInterval',
      'name' => 'DateTime::diff',
    ),
    'format' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DateTime::format',
    ),
    'getOffset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DateTime::getOffset',
    ),
    'getTimestamp' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DateTime::getTimestamp',
    ),
    'getTimezone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'DateTimeZone',
      'name' => 'DateTime::getTimezone',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'DateTime::__wakeup',
    ),
  ),
  'DateTimeImmutable' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateInterval',
          'name' => '$interval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::add',
    ),
    'createFromFormat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$time',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'DateTimeZone',
          'name' => '$timezone',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::createFromFormat',
    ),
    'createFromMutable' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTime',
          'name' => '$datetime',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::createFromMutable',
    ),
    'getLastErrors' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'DateTimeImmutable::getLastErrors',
    ),
    'modify' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$modify',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::modify',
    ),
    '__set_state' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$array',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::__set_state',
    ),
    'setDate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$year',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$month',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$day',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::setDate',
    ),
    'setISODate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$year',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$week',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$day',
          'initializer' => '= 1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::setISODate',
    ),
    'setTime' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$hour',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$minute',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$second',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::setTime',
    ),
    'setTimestamp' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$unixtimestamp',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::setTimestamp',
    ),
    'setTimezone' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTimeZone',
          'name' => '$timezone',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::setTimezone',
    ),
    'sub' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateInterval',
          'name' => '$interval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateTimeImmutable',
      'name' => 'DateTimeImmutable::sub',
    ),
    'diff' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTimeInterface',
          'name' => '$datetime2',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$absolute',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateInterval',
      'name' => 'DateTimeImmutable::diff',
    ),
    'format' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DateTimeImmutable::format',
    ),
    'getOffset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DateTimeImmutable::getOffset',
    ),
    'getTimestamp' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DateTimeImmutable::getTimestamp',
    ),
    'getTimezone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'DateTimeZone',
      'name' => 'DateTimeImmutable::getTimezone',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'DateTimeImmutable::__wakeup',
    ),
  ),
  'DateTimeInterface' => 
  array (
    'diff' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTimeInterface',
          'name' => '$datetime2',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$absolute',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateInterval',
      'name' => 'DateTimeInterface::diff',
    ),
    'format' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DateTimeInterface::format',
    ),
    'getOffset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DateTimeInterface::getOffset',
    ),
    'getTimestamp' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DateTimeInterface::getTimestamp',
    ),
    'getTimezone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'DateTimeZone',
      'name' => 'DateTimeInterface::getTimezone',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'DateTimeInterface::__wakeup',
    ),
  ),
  'DateTimeZone' => 
  array (
    'getLocation' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'DateTimeZone::getLocation',
    ),
    'getName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DateTimeZone::getName',
    ),
    'getOffset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTime',
          'name' => '$datetime',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DateTimeZone::getOffset',
    ),
    'getTransitions' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$timestamp_begin',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$timestamp_end',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'DateTimeZone::getTransitions',
    ),
    'listAbbreviations' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'DateTimeZone::listAbbreviations',
    ),
    'listIdentifiers' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$what',
          'initializer' => '= DateTimeZone::ALL',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$country',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'DateTimeZone::listIdentifiers',
    ),
  ),
  'DateInterval' => 
  array (
    'createFromDateString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$time',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'DateInterval',
      'name' => 'DateInterval::createFromDateString',
    ),
    'format' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DateInterval::format',
    ),
  ),
  'HRTime\\PerformanceCounter' => 
  array (
    'getElapsedTicks' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'HRTime\\PerformanceCounter::getElapsedTicks',
    ),
    'getFrequency' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'HRTime\\PerformanceCounter::getFrequency',
    ),
    'getLastElapsedTicks' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'HRTime\\PerformanceCounter::getLastElapsedTicks',
    ),
    'isRunning' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'HRTime\\PerformanceCounter::isRunning',
    ),
    'start' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'HRTime\\PerformanceCounter::start',
    ),
    'stop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'HRTime\\PerformanceCounter::stop',
    ),
  ),
  'HRTime\\StopWatch' => 
  array (
    'getElapsedTime' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$unit',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'HRTime\\StopWatch::getElapsedTime',
    ),
    'getLastElapsedTime' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$unit',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'HRTime\\StopWatch::getLastElapsedTime',
    ),
  ),
  'Directory' => 
  array (
    'close' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$dir_handle',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Directory::close',
    ),
    'read' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$dir_handle',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Directory::read',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$dir_handle',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Directory::rewind',
    ),
  ),
  'finfo' => 
  array (
    'buffer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'initializer' => '= NULL',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'initializer' => '= FILEINFO_NONE',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'resource',
          'name' => '$context',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'finfo::buffer',
    ),
    'file' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file_name',
          'initializer' => '= NULL',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'initializer' => '= FILEINFO_NONE',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'resource',
          'name' => '$context',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'finfo::file',
    ),
    'set_flags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'finfo::set_flags',
    ),
  ),
  'Gender\\Gender' => 
  array (
    'connect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dsn',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Gender\\Gender::connect',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dsn',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Gender\\Gender::__construct',
      'type' => 'string',
    ),
    'country' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$country',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gender\\Gender::country',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'integer',
          'name' => '$country',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Gender\\Gender::get',
    ),
    'isNick' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name0',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'integer',
          'name' => '$country',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gender\\Gender::isNick',
    ),
    'similarNames' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'integer',
          'name' => '$country',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gender\\Gender::similarNames',
    ),
  ),
  'Collator' => 
  array (
    'asort' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '&$arr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$sort_flag',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Collator::asort',
    ),
    'compare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$str1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$str2',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Collator::compare',
    ),
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Collator',
      'name' => 'Collator::create',
    ),
    'getAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Collator::getAttribute',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Collator::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Collator::getErrorMessage',
    ),
    'getLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Collator::getLocale',
    ),
    'getSortKey' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$str',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Collator::getSortKey',
    ),
    'getStrength' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Collator::getStrength',
    ),
    'setAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$val',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Collator::setAttribute',
    ),
    'setStrength' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$strength',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Collator::setStrength',
    ),
    'sortWithSortKeys' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '&$arr',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Collator::sortWithSortKeys',
    ),
    'sort' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '&$arr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$sort_flag',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Collator::sort',
    ),
  ),
  'NumberFormatter' => 
  array (
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$style',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'NumberFormatter',
      'name' => 'NumberFormatter::create',
    ),
    'formatCurrency' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$value',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$currency',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'NumberFormatter::formatCurrency',
    ),
    'format' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'number',
          'name' => '$value',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'NumberFormatter::format',
    ),
    'getAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'NumberFormatter::getAttribute',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'NumberFormatter::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'NumberFormatter::getErrorMessage',
    ),
    'getLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'NumberFormatter::getLocale',
    ),
    'getPattern' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'NumberFormatter::getPattern',
    ),
    'getSymbol' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'NumberFormatter::getSymbol',
    ),
    'getTextAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'NumberFormatter::getTextAttribute',
    ),
    'parseCurrency' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '&$currency',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '&$position',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'NumberFormatter::parseCurrency',
    ),
    'parse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '&$position',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'NumberFormatter::parse',
    ),
    'setAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'NumberFormatter::setAttribute',
    ),
    'setPattern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'NumberFormatter::setPattern',
    ),
    'setSymbol' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'NumberFormatter::setSymbol',
    ),
    'setTextAttribute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$attr',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'NumberFormatter::setTextAttribute',
    ),
  ),
  'Locale' => 
  array (
    'acceptFromHttp' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$header',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::acceptFromHttp',
    ),
    'canonicalize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::canonicalize',
    ),
    'composeLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$subtags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::composeLocale',
    ),
    'filterMatches' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$langtag',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$canonicalize',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Locale::filterMatches',
    ),
    'getAllVariants' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Locale::getAllVariants',
    ),
    'getDefault' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getDefault',
    ),
    'getDisplayLanguage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$in_locale',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getDisplayLanguage',
    ),
    'getDisplayName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$in_locale',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getDisplayName',
    ),
    'getDisplayRegion' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$in_locale',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getDisplayRegion',
    ),
    'getDisplayScript' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$in_locale',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getDisplayScript',
    ),
    'getDisplayVariant' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$in_locale',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getDisplayVariant',
    ),
    'getKeywords' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Locale::getKeywords',
    ),
    'getPrimaryLanguage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getPrimaryLanguage',
    ),
    'getRegion' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getRegion',
    ),
    'getScript' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::getScript',
    ),
    'lookup' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$langtag',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$canonicalize',
          'initializer' => '= false',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Locale::lookup',
    ),
    'parseLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Locale::parseLocale',
    ),
    'setDefault' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Locale::setDefault',
    ),
  ),
  'Normalizer' => 
  array (
    'isNormalized' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$input',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$form',
          'initializer' => '= Normalizer::FORM_C',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Normalizer::isNormalized',
    ),
    'normalize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$input',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$form',
          'initializer' => '= Normalizer::FORM_C',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Normalizer::normalize',
    ),
  ),
  'MessageFormatter' => 
  array (
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'MessageFormatter',
      'name' => 'MessageFormatter::create',
    ),
    'formatMessage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$args',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MessageFormatter::formatMessage',
    ),
    'format' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$args',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MessageFormatter::format',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'MessageFormatter::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MessageFormatter::getErrorMessage',
    ),
    'getLocale' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MessageFormatter::getLocale',
    ),
    'getPattern' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'MessageFormatter::getPattern',
    ),
    'parseMessage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$source',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MessageFormatter::parseMessage',
    ),
    'parse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MessageFormatter::parse',
    ),
    'setPattern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'MessageFormatter::setPattern',
    ),
  ),
  'IntlCalendar' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$amount',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::add',
    ),
    'after' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'IntlCalendar',
          'name' => '$other',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::after',
    ),
    'before' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'IntlCalendar',
          'name' => '$other',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::before',
    ),
    'clear' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::clear',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'name' => 'IntlCalendar::__construct',
    ),
    'createInstance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$timeZone',
          'initializer' => '= NULL',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'initializer' => '= ""',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'IntlCalendar',
      'name' => 'IntlCalendar::createInstance',
    ),
    'equals' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'IntlCalendar',
          'name' => '$other',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::equals',
    ),
    'fieldDifference' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$when',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::fieldDifference',
    ),
    'fromDateTime' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$dateTime',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'IntlCalendar',
      'name' => 'IntlCalendar::fromDateTime',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::get',
    ),
    'getActualMaximum' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getActualMaximum',
    ),
    'getActualMinimum' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getActualMinimum',
    ),
    'getAvailableLocales' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'IntlCalendar::getAvailableLocales',
    ),
    'getDayOfWeekType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$dayOfWeek',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getDayOfWeekType',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlCalendar::getErrorMessage',
    ),
    'getFirstDayOfWeek' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getFirstDayOfWeek',
    ),
    'getGreatestMinimum' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getGreatestMinimum',
    ),
    'getKeywordValuesForLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'boolean',
          'name' => '$commonlyUsed',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Iterator',
      'name' => 'IntlCalendar::getKeywordValuesForLocale',
    ),
    'getLeastMaximum' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getLeastMaximum',
    ),
    'getLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$localeType',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlCalendar::getLocale',
    ),
    'getMaximum' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getMaximum',
    ),
    'getMinimalDaysInFirstWeek' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getMinimalDaysInFirstWeek',
    ),
    'getMinimum' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getMinimum',
    ),
    'getNow' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'IntlCalendar::getNow',
    ),
    'getRepeatedWallTimeOption' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getRepeatedWallTimeOption',
    ),
    'getSkippedWallTimeOption' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getSkippedWallTimeOption',
    ),
    'getTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'IntlCalendar::getTime',
    ),
    'getTimeZone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'IntlTimeZone',
      'name' => 'IntlCalendar::getTimeZone',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlCalendar::getType',
    ),
    'getWeekendTransition' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dayOfWeek',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlCalendar::getWeekendTransition',
    ),
    'inDaylightTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::inDaylightTime',
    ),
    'isEquivalentTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'IntlCalendar',
          'name' => '$other',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::isEquivalentTo',
    ),
    'isLenient' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::isLenient',
    ),
    'isSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::isSet',
    ),
    'isWeekend' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$date',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::isWeekend',
    ),
    'roll' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$field',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$amountOrUpOrDown',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::roll',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$year',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$month',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$dayOfMonth',
          'initializer' => '= NULL',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$hour',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$minute',
          'initializer' => '= NULL',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$second',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::set',
    ),
    'setFirstDayOfWeek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$dayOfWeek',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::setFirstDayOfWeek',
    ),
    'setLenient' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$isLenient',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlCalendar::setLenient',
    ),
    'setMinimalDaysInFirstWeek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$minimalDays',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::setMinimalDaysInFirstWeek',
    ),
    'setRepeatedWallTimeOption' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$wallTimeOption',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::setRepeatedWallTimeOption',
    ),
    'setSkippedWallTimeOption' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$wallTimeOption',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::setSkippedWallTimeOption',
    ),
    'setTime' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$date',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::setTime',
    ),
    'setTimeZone' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$timeZone',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlCalendar::setTimeZone',
    ),
    'toDateTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'DateTime',
      'name' => 'IntlCalendar::toDateTime',
    ),
  ),
  'IntlTimeZone' => 
  array (
    'countEquivalentIDs' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$zoneId',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'IntlTimeZone::countEquivalentIDs',
    ),
    'createDefault' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'IntlTimeZone',
      'name' => 'IntlTimeZone::createDefault',
    ),
    'createEnumeration' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$countryOrRawOffset',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'IntlIterator',
      'name' => 'IntlTimeZone::createEnumeration',
    ),
    'createTimeZone' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$zoneId',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'IntlTimeZone',
      'name' => 'IntlTimeZone::createTimeZone',
    ),
    'fromDateTimeZone' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'DateTimeZone',
          'name' => '$zoneId',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'IntlTimeZone',
      'name' => 'IntlTimeZone::fromDateTimeZone',
    ),
    'getCanonicalID' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$zoneId',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '&$isSystemID',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlTimeZone::getCanonicalID',
    ),
    'getDisplayName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$isDaylight',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'integer',
          'name' => '$style',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlTimeZone::getDisplayName',
    ),
    'getDSTSavings' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'IntlTimeZone::getDSTSavings',
    ),
    'getEquivalentID' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$zoneId',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'integer',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlTimeZone::getEquivalentID',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'IntlTimeZone::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlTimeZone::getErrorMessage',
    ),
    'getGMT' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'IntlTimeZone',
      'name' => 'IntlTimeZone::getGMT',
    ),
    'getID' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlTimeZone::getID',
    ),
    'getOffset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$date',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$local',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'integer',
          'name' => '&$rawOffset',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'integer',
          'name' => '&$dstOffset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'IntlTimeZone::getOffset',
    ),
    'getRawOffset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'IntlTimeZone::getRawOffset',
    ),
    'getTZDataVersion' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlTimeZone::getTZDataVersion',
    ),
    'hasSameRules' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'IntlTimeZone',
          'name' => '$otherTimeZone',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlTimeZone::hasSameRules',
    ),
    'toDateTimeZone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'DateTimeZone',
      'name' => 'IntlTimeZone::toDateTimeZone',
    ),
    'useDaylightTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlTimeZone::useDaylightTime',
    ),
  ),
  'IntlDateFormatter' => 
  array (
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$datetype',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$timetype',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$timezone',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'mixed',
          'name' => '$calendar',
          'initializer' => '= NULL',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'initializer' => '= ""',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'IntlDateFormatter',
      'name' => 'IntlDateFormatter::create',
    ),
    'format' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlDateFormatter::format',
    ),
    'formatObject' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$format',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlDateFormatter::formatObject',
    ),
    'getCalendar' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'IntlDateFormatter::getCalendar',
    ),
    'getDateType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlDateFormatter::getDateType',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlDateFormatter::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlDateFormatter::getErrorMessage',
    ),
    'getLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$which',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlDateFormatter::getLocale',
    ),
    'getPattern' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlDateFormatter::getPattern',
    ),
    'getTimeType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlDateFormatter::getTimeType',
    ),
    'getTimeZoneId' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'IntlDateFormatter::getTimeZoneId',
    ),
    'getCalendarObject' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'IntlCalendar',
      'name' => 'IntlDateFormatter::getCalendarObject',
    ),
    'getTimeZone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'IntlTimeZone',
      'name' => 'IntlDateFormatter::getTimeZone',
    ),
    'isLenient' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlDateFormatter::isLenient',
    ),
    'localtime' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '&$position',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'IntlDateFormatter::localtime',
    ),
    'parse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '&$position',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'IntlDateFormatter::parse',
    ),
    'setCalendar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$which',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'IntlDateFormatter::setCalendar',
    ),
    'setLenient' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$lenient',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlDateFormatter::setLenient',
    ),
    'setPattern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlDateFormatter::setPattern',
    ),
    'setTimeZoneId' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$zone',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IntlDateFormatter::setTimeZoneId',
    ),
    'setTimeZone' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$zone',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'IntlDateFormatter::setTimeZone',
    ),
  ),
  'ResourceBundle' => 
  array (
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'ResourceBundle::count',
    ),
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$bundlename',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$fallback',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ResourceBundle',
      'name' => 'ResourceBundle::create',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'ResourceBundle::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'ResourceBundle::getErrorMessage',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string|int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'ResourceBundle::get',
    ),
    'getLocales' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$bundlename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'ResourceBundle::getLocales',
    ),
  ),
  'Spoofchecker' => 
  array (
    'areConfusable' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$s1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$s2',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '&$error',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Spoofchecker::areConfusable',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'Spoofchecker::__construct',
    ),
    'isSuspicious' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '&$error',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Spoofchecker::isSuspicious',
    ),
    'setAllowedLocales' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$locale_list',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Spoofchecker::setAllowedLocales',
    ),
    'setChecks' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$checks',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Spoofchecker::setChecks',
    ),
  ),
  'Transliterator' => 
  array (
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$id',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$direction',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Transliterator',
      'name' => 'Transliterator::create',
    ),
    'createFromRules' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$rules',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$direction',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Transliterator',
      'name' => 'Transliterator::createFromRules',
    ),
    'createInverse' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Transliterator',
      'name' => 'Transliterator::createInverse',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Transliterator::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Transliterator::getErrorMessage',
    ),
    'listIDs' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Transliterator::listIDs',
    ),
    'transliterate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$subject',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$start',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$end',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Transliterator::transliterate',
    ),
  ),
  'IntlBreakIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'name' => 'IntlBreakIterator::__construct',
    ),
    'createCharacterInstance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"locale"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::createCharacterInstance',
    ),
    'createCodePointInstance' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::createCodePointInstance',
    ),
    'createLineInstance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"locale"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::createLineInstance',
    ),
    'createSentenceInstance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"locale"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::createSentenceInstance',
    ),
    'createTitleInstance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"locale"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::createTitleInstance',
    ),
    'createWordInstance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"locale"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::createWordInstance',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::current',
    ),
    'first' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::first',
    ),
    'following' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"offset"',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::following',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::getErrorMessage',
    ),
    'getLocale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"locale_type"',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::getLocale',
    ),
    'getPartsIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"key_type"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::getPartsIterator',
    ),
    'getText' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::getText',
    ),
    'isBoundary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"offset"',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::isBoundary',
    ),
    'last' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::last',
    ),
    'next' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"offset"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::next',
    ),
    'preceding' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"offset"',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::preceding',
    ),
    'previous' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::previous',
    ),
    'setText' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$"text"',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlBreakIterator::setText',
    ),
  ),
  'IntlRuleBasedBreakIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$rules',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$areCompiled',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'IntlRuleBasedBreakIterator::__construct',
      'type' => 'string',
    ),
    'getBinaryRules' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlRuleBasedBreakIterator::getBinaryRules',
    ),
    'getRules' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlRuleBasedBreakIterator::getRules',
    ),
    'getRuleStatus' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlRuleBasedBreakIterator::getRuleStatus',
    ),
    'getRuleStatusVec' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlRuleBasedBreakIterator::getRuleStatusVec',
    ),
  ),
  'IntlCodePointBreakIterator' => 
  array (
    'getLastCodePoint' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlCodePointBreakIterator::getLastCodePoint',
    ),
  ),
  'IntlIterator' => 
  array (
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlIterator::current',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlIterator::valid',
    ),
  ),
  'IntlPartsIterator' => 
  array (
    'getBreakIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ReturnType',
      'name' => 'IntlPartsIterator::getBreakIterator',
    ),
  ),
  'UConverter' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$destination_encoding',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$source_encoding',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'UConverter::__construct',
      'type' => 'string',
    ),
    'convert' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$str',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$reverse',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'UConverter::convert',
    ),
    'fromUCallback' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$reason',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$source',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$codePoint',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'integer',
          'name' => '&$error',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'UConverter::fromUCallback',
    ),
    'getAliases' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'UConverter::getAliases',
    ),
    'getAvailable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'UConverter::getAvailable',
    ),
    'getDestinationEncoding' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'UConverter::getDestinationEncoding',
    ),
    'getDestinationType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'UConverter::getDestinationType',
    ),
    'getErrorCode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'UConverter::getErrorCode',
    ),
    'getErrorMessage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'UConverter::getErrorMessage',
    ),
    'getSourceEncoding' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'UConverter::getSourceEncoding',
    ),
    'getSourceType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'UConverter::getSourceType',
    ),
    'getStandards' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'UConverter::getStandards',
    ),
    'getSubstChars' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'UConverter::getSubstChars',
    ),
    'reasonText' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$reason',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'UConverter::reasonText',
    ),
    'setDestinationEncoding' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'UConverter::setDestinationEncoding',
    ),
    'setSourceEncoding' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'UConverter::setSourceEncoding',
    ),
    'setSubstChars' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$chars',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'UConverter::setSubstChars',
    ),
    'toUCallback' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$reason',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$source',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$codeUnits',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'integer',
          'name' => '&$error',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'UConverter::toUCallback',
    ),
    'transcode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$str',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$toEncoding',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$fromEncoding',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'UConverter::transcode',
    ),
  ),
  'Cairo' => 
  array (
    'availableFonts' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Cairo::availableFonts',
    ),
    'availableSurfaces' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Cairo::availableSurfaces',
    ),
    'statusToString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$status',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Cairo::statusToString',
    ),
    'version' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Cairo::version',
    ),
    'versionString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Cairo::versionString',
    ),
  ),
  'CairoContext' => 
  array (
    'appendPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'CairoPath',
          'name' => '$path',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::appendPath',
    ),
    'arc' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$angle1',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$angle2',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::arc',
    ),
    'arcNegative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$angle1',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$angle2',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::arcNegative',
    ),
    'clip' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::clip',
    ),
    'clipExtents' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::clipExtents',
    ),
    'clipPreserve' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::clipPreserve',
    ),
    'clipRectangleList' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::clipRectangleList',
    ),
    'closePath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::closePath',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'CairoSurface',
          'name' => '$surface',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoContext::__construct',
      'type' => 'CairoSurface',
    ),
    'copyPage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::copyPage',
    ),
    'copyPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'CairoPath',
      'name' => 'CairoContext::copyPath',
    ),
    'copyPathFlat' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'CairoPath',
      'name' => 'CairoContext::copyPathFlat',
    ),
    'curveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x3',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y3',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::curveTo',
    ),
    'deviceToUser' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::deviceToUser',
    ),
    'deviceToUserDistance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::deviceToUserDistance',
    ),
    'fill' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::fill',
    ),
    'fillExtents' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::fillExtents',
    ),
    'fillPreserve' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::fillPreserve',
    ),
    'fontExtents' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::fontExtents',
    ),
    'getAntialias' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoContext::getAntialias',
    ),
    'getCurrentPoint' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::getCurrentPoint',
    ),
    'getDash' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::getDash',
    ),
    'getDashCount' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoContext::getDashCount',
    ),
    'getFillRule' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoContext::getFillRule',
    ),
    'getFontFace' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getFontFace',
    ),
    'getFontMatrix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getFontMatrix',
    ),
    'getFontOptions' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getFontOptions',
    ),
    'getGroupTarget' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getGroupTarget',
    ),
    'getLineCap' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoContext::getLineCap',
    ),
    'getLineJoin' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoContext::getLineJoin',
    ),
    'getLineWidth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'CairoContext::getLineWidth',
    ),
    'getMatrix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getMatrix',
    ),
    'getMiterLimit' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'CairoContext::getMiterLimit',
    ),
    'getOperator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoContext::getOperator',
    ),
    'getScaledFont' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getScaledFont',
    ),
    'getSource' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getSource',
    ),
    'getTarget' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::getTarget',
    ),
    'getTolerance' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'CairoContext::getTolerance',
    ),
    'glyphPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$glyphs',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::glyphPath',
    ),
    'hasCurrentPoint' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'CairoContext::hasCurrentPoint',
    ),
    'identityMatrix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::identityMatrix',
    ),
    'inFill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'CairoContext::inFill',
    ),
    'inStroke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'CairoContext::inStroke',
    ),
    'lineTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::lineTo',
    ),
    'mask' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::mask',
    ),
    'maskSurface' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$surface',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::maskSurface',
    ),
    'moveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::moveTo',
    ),
    'newPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::newPath',
    ),
    'newSubPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::newSubPath',
    ),
    'paint' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::paint',
    ),
    'paintWithAlpha' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$alpha',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::paintWithAlpha',
    ),
    'pathExtents' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::pathExtents',
    ),
    'popGroup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::popGroup',
    ),
    'popGroupToSource' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::popGroupToSource',
    ),
    'pushGroup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::pushGroup',
    ),
    'pushGroupWithContent' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$content',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::pushGroupWithContent',
    ),
    'rectangle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$width',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::rectangle',
    ),
    'relCurveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$y2',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$x3',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'string',
          'name' => '$y3',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::relCurveTo',
    ),
    'relLineTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::relLineTo',
    ),
    'relMoveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::relMoveTo',
    ),
    'resetClip' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::resetClip',
    ),
    'restore' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::restore',
    ),
    'rotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::rotate',
    ),
    'save' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::save',
    ),
    'scale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::scale',
    ),
    'selectFontFace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$family',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$slant',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$weight',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::selectFontFace',
    ),
    'setAntialias' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$antialias',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setAntialias',
    ),
    'setDash' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dashes',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setDash',
    ),
    'setFillRule' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$setting',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setFillRule',
    ),
    'setFontFace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'CairoFontFace',
          'name' => '$fontface',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setFontFace',
    ),
    'setFontMatrix' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$matrix',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setFontMatrix',
    ),
    'setFontOptions' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$fontoptions',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setFontOptions',
    ),
    'setFontSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$size',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setFontSize',
    ),
    'setLineCap' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$setting',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setLineCap',
    ),
    'setLineJoin' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$setting',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setLineJoin',
    ),
    'setLineWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setLineWidth',
    ),
    'setMatrix' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$matrix',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setMatrix',
    ),
    'setMiterLimit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$limit',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setMiterLimit',
    ),
    'setOperator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$setting',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setOperator',
    ),
    'setScaledFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$scaledfont',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setScaledFont',
    ),
    'setSource' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setSource',
    ),
    'setSourceRGB' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$blue',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setSourceRGB',
    ),
    'setSourceRGBA' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$blue',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$alpha',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setSourceRGBA',
    ),
    'setSourceSurface' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$surface',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setSourceSurface',
    ),
    'setTolerance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tolerance',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::setTolerance',
    ),
    'showPage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::showPage',
    ),
    'showText' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::showText',
    ),
    'status' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoContext::status',
    ),
    'stroke' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::stroke',
    ),
    'strokeExtents' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::strokeExtents',
    ),
    'strokePreserve' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::strokePreserve',
    ),
    'textExtents' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::textExtents',
    ),
    'textPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::textPath',
    ),
    'transform' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$matrix',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::transform',
    ),
    'translate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoContext::translate',
    ),
    'userToDevice' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::userToDevice',
    ),
    'userToDeviceDistance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoContext::userToDeviceDistance',
    ),
  ),
  'CairoSurface' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'CairoSurface::__construct',
    ),
    'copyPage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::copyPage',
    ),
    'createSimilar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'CairoSurface',
          'name' => '$other',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$content',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$width',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::createSimilar',
    ),
    'finish' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::finish',
    ),
    'flush' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::flush',
    ),
    'getContent' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoSurface::getContent',
    ),
    'getDeviceOffset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoSurface::getDeviceOffset',
    ),
    'getFontOptions' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::getFontOptions',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoSurface::getType',
    ),
    'markDirty' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::markDirty',
    ),
    'markDirtyRectangle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$width',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::markDirtyRectangle',
    ),
    'setDeviceOffset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::setDeviceOffset',
    ),
    'setFallbackResolution' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::setFallbackResolution',
    ),
    'showPage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::showPage',
    ),
    'status' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoSurface::status',
    ),
    'writeToPng' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurface::writeToPng',
    ),
  ),
  'CairoSvgSurface' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoSvgSurface::__construct',
      'type' => 'string',
    ),
    'getVersions' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoSvgSurface::getVersions',
    ),
    'restrictToVersion' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$version',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSvgSurface::restrictToVersion',
    ),
    'versionToString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$version',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'CairoSvgSurface::versionToString',
    ),
  ),
  'CairoImageSurface' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoImageSurface::__construct',
      'type' => 'int',
    ),
    'createForData' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$stride',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoImageSurface::createForData',
    ),
    'createFromPng' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'CairoImageSurface',
      'name' => 'CairoImageSurface::createFromPng',
    ),
    'getData' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'CairoImageSurface::getData',
    ),
    'getFormat' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoImageSurface::getFormat',
    ),
    'getHeight' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoImageSurface::getHeight',
    ),
    'getStride' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoImageSurface::getStride',
    ),
    'getWidth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoImageSurface::getWidth',
    ),
  ),
  'CairoPdfSurface' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoPdfSurface::__construct',
      'type' => 'string',
    ),
    'setSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPdfSurface::setSize',
    ),
  ),
  'CairoPsSurface' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoPsSurface::__construct',
      'type' => 'string',
    ),
    'dscBeginPageSetup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPsSurface::dscBeginPageSetup',
    ),
    'dscBeginSetup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPsSurface::dscBeginSetup',
    ),
    'dscComment' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$comment',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPsSurface::dscComment',
    ),
    'getEps' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'CairoPsSurface::getEps',
    ),
    'getLevels' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoPsSurface::getLevels',
    ),
    'levelToString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$level',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'CairoPsSurface::levelToString',
    ),
    'restrictToLevel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$level',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPsSurface::restrictToLevel',
    ),
    'setEps' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$level',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPsSurface::setEps',
    ),
    'setSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPsSurface::setSize',
    ),
  ),
  'CairoFontFace' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'CairoFontFace::__construct',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontFace::getType',
    ),
    'status' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontFace::status',
    ),
  ),
  'CairoFontOptions' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'CairoFontOptions::__construct',
    ),
    'equal' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$other',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'CairoFontOptions::equal',
    ),
    'getAntialias' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontOptions::getAntialias',
    ),
    'getHintMetrics' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontOptions::getHintMetrics',
    ),
    'getHintStyle' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontOptions::getHintStyle',
    ),
    'getSubpixelOrder' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontOptions::getSubpixelOrder',
    ),
    'hash' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontOptions::hash',
    ),
    'merge' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$other',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoFontOptions::merge',
    ),
    'setAntialias' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$antialias',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoFontOptions::setAntialias',
    ),
    'setHintMetrics' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$hint_metrics',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoFontOptions::setHintMetrics',
    ),
    'setHintStyle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$hint_style',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoFontOptions::setHintStyle',
    ),
    'setSubpixelOrder' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$subpixel_order',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoFontOptions::setSubpixelOrder',
    ),
    'status' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFontOptions::status',
    ),
  ),
  'CairoScaledFont' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'CairoFontFace',
          'name' => '$font_face',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'CairoMatrix',
          'name' => '$matrix',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'CairoMatrix',
          'name' => '$ctm',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'CairoFontOptions',
          'name' => '$options',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoScaledFont::__construct',
      'type' => 'CairoFontFace',
    ),
    'extents' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoScaledFont::extents',
    ),
    'getCtm' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'CairoMatrix',
      'name' => 'CairoScaledFont::getCtm',
    ),
    'getFontFace' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoScaledFont::getFontFace',
    ),
    'getFontMatrix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoScaledFont::getFontMatrix',
    ),
    'getFontOptions' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoScaledFont::getFontOptions',
    ),
    'getScaleMatrix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoScaledFont::getScaleMatrix',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoScaledFont::getType',
    ),
    'glyphExtents' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$glyphs',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoScaledFont::glyphExtents',
    ),
    'status' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoScaledFont::status',
    ),
    'textExtents' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoScaledFont::textExtents',
    ),
  ),
  'CairoPattern' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'CairoPattern::__construct',
    ),
    'getMatrix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPattern::getMatrix',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoPattern::getType',
    ),
    'setMatrix' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$matrix',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoPattern::setMatrix',
    ),
    'status' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoPattern::status',
    ),
  ),
  'CairoGradientPattern' => 
  array (
    'addColorStopRgb' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$red',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$green',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$blue',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoGradientPattern::addColorStopRgb',
    ),
    'addColorStopRgba' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$red',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$green',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$blue',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$alpha',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoGradientPattern::addColorStopRgba',
    ),
    'getColorStopCount' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoGradientPattern::getColorStopCount',
    ),
    'getColorStopRgba' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoGradientPattern::getColorStopRgba',
    ),
    'getExtend' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoGradientPattern::getExtend',
    ),
    'setExtend' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$extend',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoGradientPattern::setExtend',
    ),
  ),
  'CairoSolidPattern' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$blue',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$alpha',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoSolidPattern::__construct',
      'type' => 'float',
    ),
    'getRgba' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoSolidPattern::getRgba',
    ),
  ),
  'CairoSurfacePattern' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'CairoSurface',
          'name' => '$surface',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoSurfacePattern::__construct',
      'type' => 'CairoSurface',
    ),
    'getExtend' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoSurfacePattern::getExtend',
    ),
    'getFilter' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoSurfacePattern::getFilter',
    ),
    'getSurface' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurfacePattern::getSurface',
    ),
    'setExtend' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$extend',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurfacePattern::setExtend',
    ),
    'setFilter' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filter',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoSurfacePattern::setFilter',
    ),
  ),
  'CairoLinearGradient' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x0',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y0',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoLinearGradient::__construct',
      'type' => 'float',
    ),
    'getPoints' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoLinearGradient::getPoints',
    ),
  ),
  'CairoRadialGradient' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x0',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y0',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$r0',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$r1',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoRadialGradient::__construct',
      'type' => 'float',
    ),
    'getCircles' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoRadialGradient::getCircles',
    ),
  ),
  'CairoFormat' => 
  array (
    'strideForWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$format',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CairoFormat::strideForWidth',
    ),
  ),
  'CairoMatrix' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$xx',
          'initializer' => '= 1.0',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$yx',
          'initializer' => '= 0.0',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$xy',
          'initializer' => '= 0.0',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$yy',
          'initializer' => '= 1.0',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x0',
          'initializer' => '= 0.0',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y0',
          'initializer' => '= 0.0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CairoMatrix::__construct',
      'type' => 'float',
    ),
    'initIdentity' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::initIdentity',
    ),
    'initRotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radians',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::initRotate',
    ),
    'initScale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$sx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sy',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::initScale',
    ),
    'initTranslate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$tx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$ty',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::initTranslate',
    ),
    'invert' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::invert',
    ),
    'multiply' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'CairoMatrix',
          'name' => '$matrix1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'CairoMatrix',
          'name' => '$matrix2',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'CairoMatrix',
      'name' => 'CairoMatrix::multiply',
    ),
    'rotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$sx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$sy',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::rotate',
    ),
    'scale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$sx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sy',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::scale',
    ),
    'transformDistance' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoMatrix::transformDistance',
    ),
    'transformPoint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$dx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CairoMatrix::transformPoint',
    ),
    'translate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$ty',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CairoMatrix::translate',
    ),
  ),
  'Gmagick' => 
  array (
    'addimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Gmagick',
          'name' => '$Gmagick',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::addimage',
    ),
    'addnoiseimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$NOISE',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::addnoiseimage',
    ),
    'annotateimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickDraw',
          'name' => '$GmagickDraw',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::annotateimage',
    ),
    'blurimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::blurimage',
    ),
    'borderimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickPixel',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::borderimage',
    ),
    'charcoalimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::charcoalimage',
    ),
    'chopimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::chopimage',
    ),
    'clear' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::clear',
    ),
    'commentimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$comment',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::commentimage',
    ),
    'compositeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Gmagick',
          'name' => '$source',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$COMPOSE',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::compositeimage',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Gmagick::__construct',
      'type' => 'string',
    ),
    'cropimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::cropimage',
    ),
    'cropthumbnailimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::cropthumbnailimage',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::current',
    ),
    'cyclecolormapimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$displace',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::cyclecolormapimage',
    ),
    'deconstructimages' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::deconstructimages',
    ),
    'despeckleimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::despeckleimage',
    ),
    'destroy' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::destroy',
    ),
    'drawimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickDraw',
          'name' => '$GmagickDraw',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::drawimage',
    ),
    'edgeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::edgeimage',
    ),
    'embossimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::embossimage',
    ),
    'enhanceimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::enhanceimage',
    ),
    'equalizeimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::equalizeimage',
    ),
    'flipimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::flipimage',
    ),
    'flopimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::flopimage',
    ),
    'frameimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickPixel',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$inner_bevel',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$outer_bevel',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::frameimage',
    ),
    'gammaimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$gamma',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::gammaimage',
    ),
    'getcopyright' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getcopyright',
    ),
    'getfilename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getfilename',
    ),
    'getimagebackgroundcolor' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::getimagebackgroundcolor',
    ),
    'getimageblueprimary' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getimageblueprimary',
    ),
    'getimagebordercolor' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::getimagebordercolor',
    ),
    'getimagechanneldepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel_type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagechanneldepth',
    ),
    'getimagecolors' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagecolors',
    ),
    'getimagecolorspace' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagecolorspace',
    ),
    'getimagecompose' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagecompose',
    ),
    'getimagedelay' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagedelay',
    ),
    'getimagedepth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagedepth',
    ),
    'getimagedispose' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagedispose',
    ),
    'getimageextrema' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getimageextrema',
    ),
    'getimagefilename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getimagefilename',
    ),
    'getimageformat' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getimageformat',
    ),
    'getimagegamma' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'Gmagick::getimagegamma',
    ),
    'getimagegreenprimary' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getimagegreenprimary',
    ),
    'getimageheight' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimageheight',
    ),
    'getimagehistogram' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getimagehistogram',
    ),
    'getimageindex' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimageindex',
    ),
    'getimageinterlacescheme' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimageinterlacescheme',
    ),
    'getimageiterations' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimageiterations',
    ),
    'getimagematte' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagematte',
    ),
    'getimagemattecolor' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::getimagemattecolor',
    ),
    'getimageprofile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getimageprofile',
    ),
    'getimageredprimary' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getimageredprimary',
    ),
    'getimagerenderingintent' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagerenderingintent',
    ),
    'getimageresolution' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getimageresolution',
    ),
    'getimagescene' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagescene',
    ),
    'getimagesignature' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getimagesignature',
    ),
    'getimagetype' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagetype',
    ),
    'getimageunits' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimageunits',
    ),
    'getimagewhitepoint' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getimagewhitepoint',
    ),
    'getimagewidth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Gmagick::getimagewidth',
    ),
    'getpackagename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getpackagename',
    ),
    'getquantumdepth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getquantumdepth',
    ),
    'getreleasedate' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::getreleasedate',
    ),
    'getsamplingfactors' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getsamplingfactors',
    ),
    'getsize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getsize',
    ),
    'getversion' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::getversion',
    ),
    'hasnextimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Gmagick::hasnextimage',
    ),
    'haspreviousimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Gmagick::haspreviousimage',
    ),
    'implodeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Gmagick::implodeimage',
    ),
    'labelimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$label',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Gmagick::labelimage',
    ),
    'levelimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$blackPoint',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$gamma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$whitePoint',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Gmagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Gmagick::levelimage',
    ),
    'magnifyimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Gmagick::magnifyimage',
    ),
    'mapimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'gmagick',
          'name' => '$gmagick',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$dither',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::mapimage',
    ),
    'medianfilterimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::medianfilterimage',
    ),
    'minifyimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::minifyimage',
    ),
    'modulateimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$brightness',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$saturation',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$hue',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::modulateimage',
    ),
    'motionblurimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::motionblurimage',
    ),
    'newimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$background',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::newimage',
    ),
    'nextimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Gmagick::nextimage',
    ),
    'normalizeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::normalizeimage',
    ),
    'oilpaintimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::oilpaintimage',
    ),
    'previousimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Gmagick::previousimage',
    ),
    'profileimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$profile',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::profileimage',
    ),
    'quantizeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$numColors',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$colorspace',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$treeDepth',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$dither',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$measureError',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::quantizeimage',
    ),
    'quantizeimages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$numColors',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$colorspace',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$treeDepth',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$dither',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$measureError',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::quantizeimages',
    ),
    'queryfontmetrics' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickDraw',
          'name' => '$draw',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::queryfontmetrics',
    ),
    'queryfonts' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'initializer' => '= "*"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::queryfonts',
    ),
    'queryformats' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'initializer' => '= "*"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Gmagick::queryformats',
    ),
    'radialblurimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Gmagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::radialblurimage',
    ),
    'raiseimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$raise',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::raiseimage',
    ),
    'read' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::read',
    ),
    'readimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::readimage',
    ),
    'readimageblob' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$imageContents',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::readimageblob',
    ),
    'readimagefile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$fp',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::readimagefile',
    ),
    'reducenoiseimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::reducenoiseimage',
    ),
    'removeimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::removeimage',
    ),
    'removeimageprofile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Gmagick::removeimageprofile',
    ),
    'resampleimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$xResolution',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$yResolution',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$filter',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$blur',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::resampleimage',
    ),
    'resizeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$filter',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$blur',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$fit',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::resizeimage',
    ),
    'rollimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::rollimage',
    ),
    'rotateimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::rotateimage',
    ),
    'scaleimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$fit',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::scaleimage',
    ),
    'separateimagechannel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::separateimagechannel',
    ),
    'setfilename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setfilename',
    ),
    'setimagebackgroundcolor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickPixel',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagebackgroundcolor',
    ),
    'setimageblueprimary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageblueprimary',
    ),
    'setimagebordercolor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickPixel',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagebordercolor',
    ),
    'setimagechanneldepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$depth',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagechanneldepth',
    ),
    'setimagecolorspace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$colorspace',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagecolorspace',
    ),
    'setimagecompose' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$composite',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagecompose',
    ),
    'setimagedelay' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$delay',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagedelay',
    ),
    'setimagedepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$depth',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagedepth',
    ),
    'setimagedispose' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$disposeType',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagedispose',
    ),
    'setimagefilename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagefilename',
    ),
    'setimageformat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$imageFormat',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageformat',
    ),
    'setimagegamma' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$gamma',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagegamma',
    ),
    'setimagegreenprimary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagegreenprimary',
    ),
    'setimageindex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageindex',
    ),
    'setimageinterlacescheme' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$interlace',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageinterlacescheme',
    ),
    'setimageiterations' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$iterations',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageiterations',
    ),
    'setimageprofile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$profile',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageprofile',
    ),
    'setimageredprimary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageredprimary',
    ),
    'setimagerenderingintent' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$rendering_intent',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagerenderingintent',
    ),
    'setimageresolution' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$xResolution',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$yResolution',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageresolution',
    ),
    'setimagescene' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$scene',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagescene',
    ),
    'setimagetype' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$imgType',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagetype',
    ),
    'setimageunits' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$resolution',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimageunits',
    ),
    'setimagewhitepoint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setimagewhitepoint',
    ),
    'setsamplingfactors' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$factors',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setsamplingfactors',
    ),
    'setsize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::setsize',
    ),
    'shearimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$xShear',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$yShear',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::shearimage',
    ),
    'solarizeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$threshold',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::solarizeimage',
    ),
    'spreadimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::spreadimage',
    ),
    'stripimage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::stripimage',
    ),
    'swirlimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::swirlimage',
    ),
    'thumbnailimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$fit',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::thumbnailimage',
    ),
    'trimimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::trimimage',
    ),
    'write' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Gmagick::write',
    ),
    'writeimage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$all_frames',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Gmagick',
      'name' => 'Gmagick::writeimage',
    ),
  ),
  'GmagickDraw' => 
  array (
    'annotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::annotate',
    ),
    'arc' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$sx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$ex',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$ey',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$sd',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$ed',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::arc',
    ),
    'bezier' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$coordinate_array',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::bezier',
    ),
    'ellipse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$ox',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$oy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$rx',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$ry',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$start',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$end',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::ellipse',
    ),
    'getfillcolor' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'GmagickDraw::getfillcolor',
    ),
    'getfillopacity' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'GmagickDraw::getfillopacity',
    ),
    'getfont' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'GmagickDraw::getfont',
    ),
    'getfontsize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'GmagickDraw::getfontsize',
    ),
    'getfontstyle' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'GmagickDraw::getfontstyle',
    ),
    'getfontweight' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'GmagickDraw::getfontweight',
    ),
    'getstrokecolor' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'GmagickDraw::getstrokecolor',
    ),
    'getstrokeopacity' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'GmagickDraw::getstrokeopacity',
    ),
    'getstrokewidth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'GmagickDraw::getstrokewidth',
    ),
    'gettextdecoration' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'GmagickDraw::gettextdecoration',
    ),
    'gettextencoding' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'GmagickDraw::gettextencoding',
    ),
    'line' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$sx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$ex',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$ey',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::line',
    ),
    'point' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::point',
    ),
    'polygon' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$coordinates',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::polygon',
    ),
    'polyline' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$coordinate_array',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::polyline',
    ),
    'rectangle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::rectangle',
    ),
    'rotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::rotate',
    ),
    'roundrectangle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$rx',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$ry',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::roundrectangle',
    ),
    'scale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::scale',
    ),
    'setfillcolor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setfillcolor',
    ),
    'setfillopacity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$fill_opacity',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setfillopacity',
    ),
    'setfont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$font',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setfont',
    ),
    'setfontsize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$pointsize',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setfontsize',
    ),
    'setfontstyle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$style',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setfontstyle',
    ),
    'setfontweight' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$weight',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setfontweight',
    ),
    'setstrokecolor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'GmagickPixel',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setstrokecolor',
    ),
    'setstrokeopacity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$stroke_opacity',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setstrokeopacity',
    ),
    'setstrokewidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::setstrokewidth',
    ),
    'settextdecoration' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$decoration',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::settextdecoration',
    ),
    'settextencoding' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickDraw',
      'name' => 'GmagickDraw::settextencoding',
    ),
  ),
  'GmagickPixel' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$color',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'GmagickPixel::__construct',
      'type' => 'string',
    ),
    'getcolor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$as_array',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$normalize_array',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'GmagickPixel::getcolor',
    ),
    'getcolorcount' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'GmagickPixel::getcolorcount',
    ),
    'getcolorvalue' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'float',
      'name' => 'GmagickPixel::getcolorvalue',
    ),
    'setcolor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickPixel',
      'name' => 'GmagickPixel::setcolor',
    ),
    'setcolorvalue' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'GmagickPixel',
      'name' => 'GmagickPixel::setcolorvalue',
    ),
  ),
  'Imagick' => 
  array (
    'adaptiveBlurImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::adaptiveBlurImage',
    ),
    'adaptiveResizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$bestfit',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::adaptiveResizeImage',
    ),
    'adaptiveSharpenImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::adaptiveSharpenImage',
    ),
    'adaptiveThresholdImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::adaptiveThresholdImage',
    ),
    'addImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$source',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::addImage',
    ),
    'addNoiseImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$noise_type',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::addNoiseImage',
    ),
    'affineTransformImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickDraw',
          'name' => '$matrix',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::affineTransformImage',
    ),
    'animateImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$x_server',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::animateImages',
    ),
    'annotateImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickDraw',
          'name' => '$draw_settings',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::annotateImage',
    ),
    'appendImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$stack',
          'initializer' => '= false',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::appendImages',
    ),
    'averageImages' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::averageImages',
    ),
    'blackThresholdImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$threshold',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::blackThresholdImage',
    ),
    'blurImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::blurImage',
    ),
    'borderImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$bordercolor',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::borderImage',
    ),
    'charcoalImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::charcoalImage',
    ),
    'chopImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::chopImage',
    ),
    'clear' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::clear',
    ),
    'clipImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::clipImage',
    ),
    'clipPathImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pathname',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$inside',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::clipPathImage',
    ),
    'clone' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::clone',
    ),
    'clutImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$lookup_table',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::clutImage',
    ),
    'coalesceImages' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::coalesceImages',
    ),
    'colorFloodfillImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$fill',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$bordercolor',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::colorFloodfillImage',
    ),
    'colorizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$colorize',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$opacity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::colorizeImage',
    ),
    'combineImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channelType',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::combineImages',
    ),
    'commentImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$comment',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::commentImage',
    ),
    'compareImageChannels' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$image',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channelType',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$metricType',
          'required' => true,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::compareImageChannels',
    ),
    'compareImageLayers' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$method',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::compareImageLayers',
    ),
    'compareImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$compare',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$metric',
          'required' => true,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::compareImages',
    ),
    'compositeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$composite_object',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$composite',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::compositeImage',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$files',
          'required' => true,
        ),
      ),
      'name' => 'Imagick::__construct',
      'type' => 'mixed',
    ),
    'contrastImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$sharpen',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::contrastImage',
    ),
    'contrastStretchImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$black_point',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$white_point',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::contrastStretchImage',
    ),
    'convolveImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$kernel',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::convolveImage',
    ),
    'cropImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::cropImage',
    ),
    'cropThumbnailImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::cropThumbnailImage',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::current',
    ),
    'cycleColormapImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$displace',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::cycleColormapImage',
    ),
    'decipherImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$passphrase',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::decipherImage',
    ),
    'deconstructImages' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::deconstructImages',
    ),
    'deleteImageArtifact' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$artifact',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::deleteImageArtifact',
    ),
    'deskewImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$threshold',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Imagick::deskewImage',
    ),
    'despeckleImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::despeckleImage',
    ),
    'destroy' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::destroy',
    ),
    'displayImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$servername',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::displayImage',
    ),
    'displayImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$servername',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::displayImages',
    ),
    'distortImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$method',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$arguments',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$bestfit',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::distortImage',
    ),
    'drawImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickDraw',
          'name' => '$draw',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::drawImage',
    ),
    'edgeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::edgeImage',
    ),
    'embossImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::embossImage',
    ),
    'encipherImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$passphrase',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::encipherImage',
    ),
    'enhanceImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::enhanceImage',
    ),
    'equalizeImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::equalizeImage',
    ),
    'evaluateImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$op',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$constant',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::evaluateImage',
    ),
    'exportImagePixels' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$map',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$STORAGE',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Imagick::exportImagePixels',
    ),
    'extentImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::extentImage',
    ),
    'flattenImages' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::flattenImages',
    ),
    'flipImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::flipImage',
    ),
    'floodFillPaintImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$fill',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$target',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'bool',
          'name' => '$invert',
          'required' => true,
        ),
        6 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::floodFillPaintImage',
    ),
    'flopImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::flopImage',
    ),
    'frameImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$matte_color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$inner_bevel',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$outer_bevel',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::frameImage',
    ),
    'functionImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$function',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$arguments',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Imagick::functionImage',
    ),
    'fxImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$expression',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::fxImage',
    ),
    'gammaImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$gamma',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::gammaImage',
    ),
    'gaussianBlurImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::gaussianBlurImage',
    ),
    'getColorspace' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getColorspace',
    ),
    'getCompression' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getCompression',
    ),
    'getCompressionQuality' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getCompressionQuality',
    ),
    'getCopyright' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getCopyright',
    ),
    'getFilename' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getFilename',
    ),
    'getFont' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getFont',
    ),
    'getFormat' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getFormat',
    ),
    'getGravity' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getGravity',
    ),
    'getHomeURL' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getHomeURL',
    ),
    'getImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::getImage',
    ),
    'getImageAlphaChannel' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageAlphaChannel',
    ),
    'getImageArtifact' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$artifact',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageArtifact',
    ),
    'getImageBackgroundColor' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickPixel',
      'name' => 'Imagick::getImageBackgroundColor',
    ),
    'getImageBlob' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageBlob',
    ),
    'getImageBluePrimary' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageBluePrimary',
    ),
    'getImageBorderColor' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickPixel',
      'name' => 'Imagick::getImageBorderColor',
    ),
    'getImageChannelDepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageChannelDepth',
    ),
    'getImageChannelDistortion' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$reference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$metric',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'Imagick::getImageChannelDistortion',
    ),
    'getImageChannelDistortions' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$reference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$metric',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'float',
      'name' => 'Imagick::getImageChannelDistortions',
    ),
    'getImageChannelExtrema' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageChannelExtrema',
    ),
    'getImageChannelKurtosis' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Imagick::getImageChannelKurtosis',
    ),
    'getImageChannelMean' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageChannelMean',
    ),
    'getImageChannelRange' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageChannelRange',
    ),
    'getImageChannelStatistics' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageChannelStatistics',
    ),
    'getImageClipMask' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::getImageClipMask',
    ),
    'getImageColormapColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'type' => 'ImagickPixel',
      'name' => 'Imagick::getImageColormapColor',
    ),
    'getImageColors' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageColors',
    ),
    'getImageColorspace' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageColorspace',
    ),
    'getImageCompose' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageCompose',
    ),
    'getImageCompression' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageCompression',
    ),
    'getImageCompressionQuality' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageCompressionQuality',
    ),
    'getImageDelay' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageDelay',
    ),
    'getImageDepth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageDepth',
    ),
    'getImageDispose' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageDispose',
    ),
    'getImageDistortion' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'MagickWand',
          'name' => '$reference',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$metric',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'Imagick::getImageDistortion',
    ),
    'getImageExtrema' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageExtrema',
    ),
    'getImageFilename' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageFilename',
    ),
    'getImageFormat' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageFormat',
    ),
    'getImageGamma' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'Imagick::getImageGamma',
    ),
    'getImageGeometry' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageGeometry',
    ),
    'getImageGravity' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageGravity',
    ),
    'getImageGreenPrimary' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageGreenPrimary',
    ),
    'getImageHeight' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageHeight',
    ),
    'getImageHistogram' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageHistogram',
    ),
    'getImageIndex' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageIndex',
    ),
    'getImageInterlaceScheme' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageInterlaceScheme',
    ),
    'getImageInterpolateMethod' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageInterpolateMethod',
    ),
    'getImageIterations' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageIterations',
    ),
    'getImageLength' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageLength',
    ),
    'getImageMagickLicense' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageMagickLicense',
    ),
    'getImageMatte' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::getImageMatte',
    ),
    'getImageMatteColor' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickPixel',
      'name' => 'Imagick::getImageMatteColor',
    ),
    'getImageOrientation' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageOrientation',
    ),
    'getImagePage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImagePage',
    ),
    'getImagePixelColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'ImagickPixel',
      'name' => 'Imagick::getImagePixelColor',
    ),
    'getImageProfile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageProfile',
    ),
    'getImageProfiles' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'initializer' => '= "*"',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$only_names',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageProfiles',
    ),
    'getImageProperties' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'initializer' => '= "*"',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$only_names',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageProperties',
    ),
    'getImageProperty' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageProperty',
    ),
    'getImageRedPrimary' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageRedPrimary',
    ),
    'getImageRegion' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::getImageRegion',
    ),
    'getImageRenderingIntent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageRenderingIntent',
    ),
    'getImageResolution' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageResolution',
    ),
    'getImagesBlob' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getImagesBlob',
    ),
    'getImageScene' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageScene',
    ),
    'getImageSignature' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getImageSignature',
    ),
    'getImageSize' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageSize',
    ),
    'getImageTicksPerSecond' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageTicksPerSecond',
    ),
    'getImageTotalInkDensity' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'Imagick::getImageTotalInkDensity',
    ),
    'getImageType' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageType',
    ),
    'getImageUnits' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageUnits',
    ),
    'getImageVirtualPixelMethod' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageVirtualPixelMethod',
    ),
    'getImageWhitePoint' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getImageWhitePoint',
    ),
    'getImageWidth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getImageWidth',
    ),
    'getInterlaceScheme' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getInterlaceScheme',
    ),
    'getIteratorIndex' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getIteratorIndex',
    ),
    'getNumberImages' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getNumberImages',
    ),
    'getOption' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'Imagick::getOption',
    ),
    'getPackageName' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getPackageName',
    ),
    'getPage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getPage',
    ),
    'getPixelIterator' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickPixelIterator',
      'name' => 'Imagick::getPixelIterator',
    ),
    'getPixelRegionIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
      ),
      'type' => 'ImagickPixelIterator',
      'name' => 'Imagick::getPixelRegionIterator',
    ),
    'getPointSize' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'Imagick::getPointSize',
    ),
    'getQuantumDepth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getQuantumDepth',
    ),
    'getQuantumRange' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getQuantumRange',
    ),
    'getReleaseDate' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::getReleaseDate',
    ),
    'getResource' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'Imagick::getResource',
    ),
    'getResourceLimit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'Imagick::getResourceLimit',
    ),
    'getSamplingFactors' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getSamplingFactors',
    ),
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getSize',
    ),
    'getSizeOffset' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'Imagick::getSizeOffset',
    ),
    'getVersion' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'Imagick::getVersion',
    ),
    'haldClutImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$clut',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Imagick::haldClutImage',
    ),
    'hasNextImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::hasNextImage',
    ),
    'hasPreviousImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::hasPreviousImage',
    ),
    'identifyImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$appendRawOutput',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::identifyImage',
    ),
    'implodeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::implodeImage',
    ),
    'importImagePixels' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$map',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$storage',
          'required' => true,
        ),
        6 => 
        array (
          'type' => 'array',
          'name' => '$pixels',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Imagick::importImagePixels',
    ),
    'labelImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$label',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::labelImage',
    ),
    'levelImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$blackPoint',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$gamma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$whitePoint',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::levelImage',
    ),
    'linearStretchImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$blackPoint',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$whitePoint',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::linearStretchImage',
    ),
    'liquidRescaleImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$delta_x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$rigidity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::liquidRescaleImage',
    ),
    'magnifyImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::magnifyImage',
    ),
    'mapImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$map',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$dither',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::mapImage',
    ),
    'matteFloodfillImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$alpha',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$bordercolor',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::matteFloodfillImage',
    ),
    'medianFilterImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::medianFilterImage',
    ),
    'mergeImageLayers' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$layer_method',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::mergeImageLayers',
    ),
    'minifyImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::minifyImage',
    ),
    'modulateImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$brightness',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$saturation',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$hue',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::modulateImage',
    ),
    'montageImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickDraw',
          'name' => '$draw',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$tile_geometry',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$thumbnail_geometry',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$frame',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::montageImage',
    ),
    'morphImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$number_frames',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::morphImages',
    ),
    'mosaicImages' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::mosaicImages',
    ),
    'motionBlurImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::motionBlurImage',
    ),
    'negateImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$gray',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::negateImage',
    ),
    'newImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$cols',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$background',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::newImage',
    ),
    'newPseudoImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$pseudoString',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::newPseudoImage',
    ),
    'nextImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::nextImage',
    ),
    'normalizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::normalizeImage',
    ),
    'oilPaintImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::oilPaintImage',
    ),
    'opaquePaintImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$target',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$fill',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$invert',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::opaquePaintImage',
    ),
    'optimizeImageLayers' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::optimizeImageLayers',
    ),
    'orderedPosterizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$threshold_map',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::orderedPosterizeImage',
    ),
    'paintFloodfillImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$fill',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$bordercolor',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::paintFloodfillImage',
    ),
    'paintOpaqueImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$target',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$fill',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::paintOpaqueImage',
    ),
    'paintTransparentImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$target',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$alpha',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::paintTransparentImage',
    ),
    'pingImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::pingImage',
    ),
    'pingImageBlob' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$image',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::pingImageBlob',
    ),
    'pingImageFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$filehandle',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$fileName',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::pingImageFile',
    ),
    'polaroidImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickDraw',
          'name' => '$properties',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::polaroidImage',
    ),
    'posterizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$levels',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$dither',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::posterizeImage',
    ),
    'previewImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$preview',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::previewImages',
    ),
    'previousImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::previousImage',
    ),
    'profileImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$profile',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::profileImage',
    ),
    'quantizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$numberColors',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$colorspace',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$treedepth',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$dither',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$measureError',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::quantizeImage',
    ),
    'quantizeImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$numberColors',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$colorspace',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$treedepth',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$dither',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$measureError',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::quantizeImages',
    ),
    'queryFontMetrics' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickDraw',
          'name' => '$properties',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$multiline',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::queryFontMetrics',
    ),
    'queryFonts' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'initializer' => '= "*"',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::queryFonts',
    ),
    'queryFormats' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern',
          'initializer' => '= "*"',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'Imagick::queryFormats',
    ),
    'radialBlurImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::radialBlurImage',
    ),
    'raiseImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$raise',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::raiseImage',
    ),
    'randomThresholdImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$low',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$high',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::randomThresholdImage',
    ),
    'readImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::readImage',
    ),
    'readImageBlob' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$image',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::readImageBlob',
    ),
    'readImageFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$filehandle',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$fileName',
          'initializer' => '= null',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::readImageFile',
    ),
    'recolorImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$matrix',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::recolorImage',
    ),
    'reduceNoiseImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::reduceNoiseImage',
    ),
    'remapImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$replacement',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$DITHER',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Imagick::remapImage',
    ),
    'removeImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::removeImage',
    ),
    'removeImageProfile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'Imagick::removeImageProfile',
    ),
    'render' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::render',
    ),
    'resampleImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x_resolution',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y_resolution',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$filter',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$blur',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::resampleImage',
    ),
    'resetImagePage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$page',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::resetImagePage',
    ),
    'resizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$filter',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$blur',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$bestfit',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::resizeImage',
    ),
    'rollImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::rollImage',
    ),
    'rotateImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$background',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::rotateImage',
    ),
    'roundCorners' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x_rounding',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y_rounding',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$stroke_width',
          'initializer' => '= 10',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$displace',
          'initializer' => '= 5',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$size_correction',
          'initializer' => '= -6',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::roundCorners',
    ),
    'sampleImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::sampleImage',
    ),
    'scaleImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$cols',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$bestfit',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::scaleImage',
    ),
    'segmentImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$COLORSPACE',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$cluster_threshold',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$smooth_threshold',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$verbose',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Imagick::segmentImage',
    ),
    'separateImageChannel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::separateImageChannel',
    ),
    'sepiaToneImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$threshold',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::sepiaToneImage',
    ),
    'setBackgroundColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$background',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setBackgroundColor',
    ),
    'setColorspace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$COLORSPACE',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setColorspace',
    ),
    'setCompression' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setCompression',
    ),
    'setCompressionQuality' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$quality',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setCompressionQuality',
    ),
    'setFilename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setFilename',
    ),
    'setFirstIterator' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::setFirstIterator',
    ),
    'setFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$font',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setFont',
    ),
    'setFormat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setFormat',
    ),
    'setGravity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$gravity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setGravity',
    ),
    'setImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$replace',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImage',
    ),
    'setImageAlphaChannel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageAlphaChannel',
    ),
    'setImageArtifact' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$artifact',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageArtifact',
    ),
    'setImageBackgroundColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$background',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageBackgroundColor',
    ),
    'setImageBias' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$bias',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageBias',
    ),
    'setImageBluePrimary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageBluePrimary',
    ),
    'setImageBorderColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$border',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageBorderColor',
    ),
    'setImageChannelDepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$depth',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageChannelDepth',
    ),
    'setImageClipMask' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$clip_mask',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageClipMask',
    ),
    'setImageColormapColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'ImagickPixel',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageColormapColor',
    ),
    'setImageColorspace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$colorspace',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageColorspace',
    ),
    'setImageCompose' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compose',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageCompose',
    ),
    'setImageCompression' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageCompression',
    ),
    'setImageCompressionQuality' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$quality',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageCompressionQuality',
    ),
    'setImageDelay' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$delay',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageDelay',
    ),
    'setImageDepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$depth',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageDepth',
    ),
    'setImageDispose' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$dispose',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageDispose',
    ),
    'setImageExtent' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageExtent',
    ),
    'setImageFilename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageFilename',
    ),
    'setImageFormat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageFormat',
    ),
    'setImageGamma' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$gamma',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageGamma',
    ),
    'setImageGravity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$gravity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageGravity',
    ),
    'setImageGreenPrimary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageGreenPrimary',
    ),
    'setImageIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageIndex',
    ),
    'setImageInterlaceScheme' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$interlace_scheme',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageInterlaceScheme',
    ),
    'setImageInterpolateMethod' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$method',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageInterpolateMethod',
    ),
    'setImageIterations' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$iterations',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageIterations',
    ),
    'setImageMatte' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$matte',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageMatte',
    ),
    'setImageMatteColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$matte',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageMatteColor',
    ),
    'setImageOpacity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$opacity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageOpacity',
    ),
    'setImageOrientation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$orientation',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageOrientation',
    ),
    'setImagePage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImagePage',
    ),
    'setImageProfile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$profile',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageProfile',
    ),
    'setImageProperty' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageProperty',
    ),
    'setImageRedPrimary' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageRedPrimary',
    ),
    'setImageRenderingIntent' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$rendering_intent',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageRenderingIntent',
    ),
    'setImageResolution' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x_resolution',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y_resolution',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageResolution',
    ),
    'setImageScene' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$scene',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageScene',
    ),
    'setImageTicksPerSecond' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$ticks_per_second',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageTicksPerSecond',
    ),
    'setImageType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$image_type',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageType',
    ),
    'setImageUnits' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$units',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageUnits',
    ),
    'setImageVirtualPixelMethod' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$method',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageVirtualPixelMethod',
    ),
    'setImageWhitePoint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setImageWhitePoint',
    ),
    'setInterlaceScheme' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$interlace_scheme',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setInterlaceScheme',
    ),
    'setIteratorIndex' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setIteratorIndex',
    ),
    'setLastIterator' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::setLastIterator',
    ),
    'setOption' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setOption',
    ),
    'setPage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setPage',
    ),
    'setPointSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$point_size',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setPointSize',
    ),
    'setResolution' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x_resolution',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y_resolution',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setResolution',
    ),
    'setResourceLimit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$limit',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setResourceLimit',
    ),
    'setSamplingFactors' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$factors',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setSamplingFactors',
    ),
    'setSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setSize',
    ),
    'setSizeOffset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setSizeOffset',
    ),
    'setType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$image_type',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::setType',
    ),
    'shadeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$gray',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$azimuth',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$elevation',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::shadeImage',
    ),
    'shadowImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$opacity',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::shadowImage',
    ),
    'sharpenImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::sharpenImage',
    ),
    'shaveImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::shaveImage',
    ),
    'shearImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$background',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$x_shear',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y_shear',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::shearImage',
    ),
    'sigmoidalContrastImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$sharpen',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$alpha',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$beta',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::sigmoidalContrastImage',
    ),
    'sketchImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::sketchImage',
    ),
    'solarizeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$threshold',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::solarizeImage',
    ),
    'sparseColorImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$SPARSE_METHOD',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$arguments',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_DEFAULT',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Imagick::sparseColorImage',
    ),
    'spliceImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::spliceImage',
    ),
    'spreadImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::spreadImage',
    ),
    'steganoImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$watermark_wand',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::steganoImage',
    ),
    'stereoImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$offset_wand',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::stereoImage',
    ),
    'stripImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::stripImage',
    ),
    'swirlImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::swirlImage',
    ),
    'textureImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$texture_wand',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::textureImage',
    ),
    'thresholdImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$threshold',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::thresholdImage',
    ),
    'thumbnailImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$bestfit',
          'initializer' => '= false',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$fill',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::thumbnailImage',
    ),
    'tintImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$tint',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$opacity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::tintImage',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'Imagick::__toString',
    ),
    'transformImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$crop',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$geometry',
          'required' => true,
        ),
      ),
      'type' => 'Imagick',
      'name' => 'Imagick::transformImage',
    ),
    'transparentPaintImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$target',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$alpha',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$invert',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::transparentPaintImage',
    ),
    'transposeImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::transposeImage',
    ),
    'transverseImage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::transverseImage',
    ),
    'trimImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::trimImage',
    ),
    'uniqueImageColors' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::uniqueImageColors',
    ),
    'unsharpMaskImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$radius',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sigma',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$amount',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$threshold',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$channel',
          'initializer' => '= Imagick::CHANNEL_ALL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::unsharpMaskImage',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'Imagick::valid',
    ),
    'vignetteImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$blackPoint',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$whitePoint',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::vignetteImage',
    ),
    'waveImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$amplitude',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$length',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::waveImage',
    ),
    'whiteThresholdImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$threshold',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::whiteThresholdImage',
    ),
    'writeImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::writeImage',
    ),
    'writeImageFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$filehandle',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::writeImageFile',
    ),
    'writeImages' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$adjoin',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::writeImages',
    ),
    'writeImagesFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$filehandle',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'Imagick::writeImagesFile',
    ),
  ),
  'ImagickDraw' => 
  array (
    'affine' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$affine',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::affine',
    ),
    'annotation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::annotation',
    ),
    'arc' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$sx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$ex',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$ey',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$sd',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$ed',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::arc',
    ),
    'bezier' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$coordinates',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::bezier',
    ),
    'circle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$ox',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$oy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$px',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$py',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::circle',
    ),
    'clear' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::clear',
    ),
    'clone' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickDraw',
      'name' => 'ImagickDraw::clone',
    ),
    'color' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$paintMethod',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::color',
    ),
    'comment' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$comment',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::comment',
    ),
    'composite' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compose',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'Imagick',
          'name' => '$compositeWand',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::composite',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'ImagickDraw::__construct',
    ),
    'destroy' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::destroy',
    ),
    'ellipse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$ox',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$oy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$rx',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$ry',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$start',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$end',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::ellipse',
    ),
    'getClipPath' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'ImagickDraw::getClipPath',
    ),
    'getClipRule' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getClipRule',
    ),
    'getClipUnits' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getClipUnits',
    ),
    'getFillColor' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickPixel',
      'name' => 'ImagickDraw::getFillColor',
    ),
    'getFillOpacity' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'ImagickDraw::getFillOpacity',
    ),
    'getFillRule' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getFillRule',
    ),
    'getFont' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'ImagickDraw::getFont',
    ),
    'getFontFamily' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'ImagickDraw::getFontFamily',
    ),
    'getFontSize' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'ImagickDraw::getFontSize',
    ),
    'getFontStyle' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getFontStyle',
    ),
    'getFontWeight' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getFontWeight',
    ),
    'getGravity' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getGravity',
    ),
    'getStrokeAntialias' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::getStrokeAntialias',
    ),
    'getStrokeColor' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickPixel',
      'name' => 'ImagickDraw::getStrokeColor',
    ),
    'getStrokeDashArray' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'ImagickDraw::getStrokeDashArray',
    ),
    'getStrokeDashOffset' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'ImagickDraw::getStrokeDashOffset',
    ),
    'getStrokeLineCap' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getStrokeLineCap',
    ),
    'getStrokeLineJoin' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getStrokeLineJoin',
    ),
    'getStrokeMiterLimit' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getStrokeMiterLimit',
    ),
    'getStrokeOpacity' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'ImagickDraw::getStrokeOpacity',
    ),
    'getStrokeWidth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'ImagickDraw::getStrokeWidth',
    ),
    'getTextAlignment' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getTextAlignment',
    ),
    'getTextAntialias' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::getTextAntialias',
    ),
    'getTextDecoration' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickDraw::getTextDecoration',
    ),
    'getTextEncoding' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'ImagickDraw::getTextEncoding',
    ),
    'getTextUnderColor' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'ImagickPixel',
      'name' => 'ImagickDraw::getTextUnderColor',
    ),
    'getVectorGraphics' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'ImagickDraw::getVectorGraphics',
    ),
    'line' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$sx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$sy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$ex',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$ey',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::line',
    ),
    'matte' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$paintMethod',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::matte',
    ),
    'pathClose' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathClose',
    ),
    'pathCurveToAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToAbsolute',
    ),
    'pathCurveToQuadraticBezierAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToQuadraticBezierAbsolute',
    ),
    'pathCurveToQuadraticBezierRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToQuadraticBezierRelative',
    ),
    'pathCurveToQuadraticBezierSmoothAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToQuadraticBezierSmoothAbsolute',
    ),
    'pathCurveToQuadraticBezierSmoothRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToQuadraticBezierSmoothRelative',
    ),
    'pathCurveToRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToRelative',
    ),
    'pathCurveToSmoothAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToSmoothAbsolute',
    ),
    'pathCurveToSmoothRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathCurveToSmoothRelative',
    ),
    'pathEllipticArcAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$rx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$ry',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x_axis_rotation',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$large_arc_flag',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$sweep_flag',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        6 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathEllipticArcAbsolute',
    ),
    'pathEllipticArcRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$rx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$ry',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x_axis_rotation',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$large_arc_flag',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'bool',
          'name' => '$sweep_flag',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        6 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathEllipticArcRelative',
    ),
    'pathFinish' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathFinish',
    ),
    'pathLineToAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathLineToAbsolute',
    ),
    'pathLineToHorizontalAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathLineToHorizontalAbsolute',
    ),
    'pathLineToHorizontalRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathLineToHorizontalRelative',
    ),
    'pathLineToRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathLineToRelative',
    ),
    'pathLineToVerticalAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathLineToVerticalAbsolute',
    ),
    'pathLineToVerticalRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathLineToVerticalRelative',
    ),
    'pathMoveToAbsolute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathMoveToAbsolute',
    ),
    'pathMoveToRelative' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathMoveToRelative',
    ),
    'pathStart' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pathStart',
    ),
    'point' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::point',
    ),
    'polygon' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$coordinates',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::polygon',
    ),
    'polyline' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$coordinates',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::polyline',
    ),
    'pop' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pop',
    ),
    'popClipPath' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::popClipPath',
    ),
    'popDefs' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::popDefs',
    ),
    'popPattern' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::popPattern',
    ),
    'push' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::push',
    ),
    'pushClipPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$clip_mask_id',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pushClipPath',
    ),
    'pushDefs' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pushDefs',
    ),
    'pushPattern' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pattern_id',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::pushPattern',
    ),
    'rectangle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::rectangle',
    ),
    'render' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::render',
    ),
    'rotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::rotate',
    ),
    'roundRectangle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$rx',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$ry',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::roundRectangle',
    ),
    'scale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::scale',
    ),
    'setClipPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$clip_mask',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setClipPath',
    ),
    'setClipRule' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fill_rule',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setClipRule',
    ),
    'setClipUnits' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$clip_units',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setClipUnits',
    ),
    'setFillAlpha' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$opacity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFillAlpha',
    ),
    'setFillColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickPixel',
          'name' => '$fill_pixel',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFillColor',
    ),
    'setFillOpacity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$fillOpacity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFillOpacity',
    ),
    'setFillPatternURL' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$fill_url',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFillPatternURL',
    ),
    'setFillRule' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fill_rule',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFillRule',
    ),
    'setFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$font_name',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFont',
    ),
    'setFontFamily' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$font_family',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFontFamily',
    ),
    'setFontSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$pointsize',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFontSize',
    ),
    'setFontStretch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$fontStretch',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFontStretch',
    ),
    'setFontStyle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$style',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFontStyle',
    ),
    'setFontWeight' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$font_weight',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setFontWeight',
    ),
    'setGravity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$gravity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setGravity',
    ),
    'setStrokeAlpha' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$opacity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeAlpha',
    ),
    'setStrokeAntialias' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$stroke_antialias',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeAntialias',
    ),
    'setStrokeColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickPixel',
          'name' => '$stroke_pixel',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeColor',
    ),
    'setStrokeDashArray' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$dashArray',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeDashArray',
    ),
    'setStrokeDashOffset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$dash_offset',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeDashOffset',
    ),
    'setStrokeLineCap' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$linecap',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeLineCap',
    ),
    'setStrokeLineJoin' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$linejoin',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeLineJoin',
    ),
    'setStrokeMiterLimit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$miterlimit',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeMiterLimit',
    ),
    'setStrokeOpacity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$stroke_opacity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeOpacity',
    ),
    'setStrokePatternURL' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$stroke_url',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokePatternURL',
    ),
    'setStrokeWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$stroke_width',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setStrokeWidth',
    ),
    'setTextAlignment' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$alignment',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setTextAlignment',
    ),
    'setTextAntialias' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$antiAlias',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setTextAntialias',
    ),
    'setTextDecoration' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$decoration',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setTextDecoration',
    ),
    'setTextEncoding' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setTextEncoding',
    ),
    'setTextUnderColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickPixel',
          'name' => '$under_color',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setTextUnderColor',
    ),
    'setVectorGraphics' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$xml',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setVectorGraphics',
    ),
    'setViewbox' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$y2',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::setViewbox',
    ),
    'skewX' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::skewX',
    ),
    'skewY' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::skewY',
    ),
    'translate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickDraw::translate',
    ),
  ),
  'ImagickPixel' => 
  array (
    'clear' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixel::clear',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$color',
          'required' => false,
        ),
      ),
      'name' => 'ImagickPixel::__construct',
      'type' => 'string',
    ),
    'destroy' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixel::destroy',
    ),
    'getColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$normalized',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'array',
      'name' => 'ImagickPixel::getColor',
    ),
    'getColorAsString' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'ImagickPixel::getColorAsString',
    ),
    'getColorCount' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickPixel::getColorCount',
    ),
    'getColorValue' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'ImagickPixel::getColorValue',
    ),
    'getHSL' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'ImagickPixel::getHSL',
    ),
    'isPixelSimilar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickPixel',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixel::isPixelSimilar',
    ),
    'isSimilar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'ImagickPixel',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$fuzz',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixel::isSimilar',
    ),
    'setColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$color',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixel::setColor',
    ),
    'setColorValue' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$color',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixel::setColorValue',
    ),
    'setHSL' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$hue',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$saturation',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$luminosity',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixel::setHSL',
    ),
  ),
  'ImagickPixelIterator' => 
  array (
    'clear' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::clear',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$wand',
          'required' => true,
        ),
      ),
      'name' => 'ImagickPixelIterator::__construct',
      'type' => 'Imagick',
    ),
    'destroy' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::destroy',
    ),
    'getCurrentIteratorRow' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'ImagickPixelIterator::getCurrentIteratorRow',
    ),
    'getIteratorRow' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'ImagickPixelIterator::getIteratorRow',
    ),
    'getNextIteratorRow' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'ImagickPixelIterator::getNextIteratorRow',
    ),
    'getPreviousIteratorRow' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'ImagickPixelIterator::getPreviousIteratorRow',
    ),
    'newPixelIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$wand',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::newPixelIterator',
    ),
    'newPixelRegionIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Imagick',
          'name' => '$wand',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$columns',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$rows',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::newPixelRegionIterator',
    ),
    'resetIterator' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::resetIterator',
    ),
    'setIteratorFirstRow' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::setIteratorFirstRow',
    ),
    'setIteratorLastRow' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::setIteratorLastRow',
    ),
    'setIteratorRow' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$row',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::setIteratorRow',
    ),
    'syncIterator' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'ImagickPixelIterator::syncIterator',
    ),
  ),
  'Lapack' => 
  array (
    'eigenValues' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$left',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$right',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Lapack::eigenValues',
    ),
    'identity' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$n',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Lapack::identity',
    ),
    'leastSquaresByFactorisation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$b',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Lapack::leastSquaresByFactorisation',
    ),
    'leastSquaresBySVD' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$b',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Lapack::leastSquaresBySVD',
    ),
    'pseudoInverse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$a',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Lapack::pseudoInverse',
    ),
    'singularValues' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$a',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Lapack::singularValues',
    ),
    'solveLinearEquation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$b',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Lapack::solveLinearEquation',
    ),
  ),
  'HaruDoc' => 
  array (
    'addPage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'HaruDoc::addPage',
    ),
    'addPageLabel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$first_page',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$style',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$first_num',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$prefix',
          'initializer' => '= ""',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::addPageLabel',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'HaruDoc::__construct',
    ),
    'createOutline' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$title',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'object',
          'name' => '$parent_outline',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'object',
          'name' => '$encoder',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruDoc::createOutline',
    ),
    'getCurrentEncoder' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'HaruDoc::getCurrentEncoder',
    ),
    'getCurrentPage' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'HaruDoc::getCurrentPage',
    ),
    'getEncoder' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruDoc::getEncoder',
    ),
    'getFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$fontname',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruDoc::getFont',
    ),
    'getInfoAttr' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'HaruDoc::getInfoAttr',
    ),
    'getPageLayout' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruDoc::getPageLayout',
    ),
    'getPageMode' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruDoc::getPageMode',
    ),
    'getStreamSize' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruDoc::getStreamSize',
    ),
    'insertPage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$page',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruDoc::insertPage',
    ),
    'loadJPEG' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruDoc::loadJPEG',
    ),
    'loadPNG' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$deferred',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruDoc::loadPNG',
    ),
    'loadRaw' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$height',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$color_space',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruDoc::loadRaw',
    ),
    'loadTTC' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$fontfile',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$embed',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'HaruDoc::loadTTC',
    ),
    'loadTTF' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$fontfile',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$embed',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'HaruDoc::loadTTF',
    ),
    'loadType1' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$afmfile',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$pfmfile',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'HaruDoc::loadType1',
    ),
    'output' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::output',
    ),
    'readFromStream' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$bytes',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'HaruDoc::readFromStream',
    ),
    'resetError' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::resetError',
    ),
    'resetStream' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::resetStream',
    ),
    'save' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::save',
    ),
    'saveToStream' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::saveToStream',
    ),
    'setCompressionMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setCompressionMode',
    ),
    'setCurrentEncoder' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setCurrentEncoder',
    ),
    'setEncryptionMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$key_len',
          'initializer' => '= 5',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setEncryptionMode',
    ),
    'setInfoAttr' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$info',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setInfoAttr',
    ),
    'setInfoDateAttr' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$year',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$month',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$day',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$hour',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$min',
          'required' => true,
        ),
        6 => 
        array (
          'type' => 'int',
          'name' => '$sec',
          'required' => true,
        ),
        7 => 
        array (
          'type' => 'string',
          'name' => '$ind',
          'required' => true,
        ),
        8 => 
        array (
          'type' => 'int',
          'name' => '$off_hour',
          'required' => true,
        ),
        9 => 
        array (
          'type' => 'int',
          'name' => '$off_min',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setInfoDateAttr',
    ),
    'setOpenAction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$destination',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setOpenAction',
    ),
    'setPageLayout' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$layout',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setPageLayout',
    ),
    'setPageMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setPageMode',
    ),
    'setPagesConfiguration' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$page_per_pages',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setPagesConfiguration',
    ),
    'setPassword' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$owner_password',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$user_password',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setPassword',
    ),
    'setPermission' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$permission',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::setPermission',
    ),
    'useCNSEncodings' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useCNSEncodings',
    ),
    'useCNSFonts' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useCNSFonts',
    ),
    'useCNTEncodings' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useCNTEncodings',
    ),
    'useCNTFonts' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useCNTFonts',
    ),
    'useJPEncodings' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useJPEncodings',
    ),
    'useJPFonts' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useJPFonts',
    ),
    'useKREncodings' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useKREncodings',
    ),
    'useKRFonts' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDoc::useKRFonts',
    ),
  ),
  'HaruPage' => 
  array (
    'arc' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$ray',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$ang1',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$ang2',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::arc',
    ),
    'beginText' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruPage::beginText',
    ),
    'circle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$ray',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::circle',
    ),
    'closePath' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruPage::closePath',
    ),
    'concat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$b',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$c',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$d',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::concat',
    ),
    'createDestination' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'HaruPage::createDestination',
    ),
    'createLinkAnnotation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$rectangle',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'object',
          'name' => '$destination',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruPage::createLinkAnnotation',
    ),
    'createTextAnnotation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$rectangle',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'object',
          'name' => '$encoder',
          'required' => false,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruPage::createTextAnnotation',
    ),
    'createURLAnnotation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$rectangle',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$url',
          'required' => true,
        ),
      ),
      'type' => 'object',
      'name' => 'HaruPage::createURLAnnotation',
    ),
    'curveTo2' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x3',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y3',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::curveTo2',
    ),
    'curveTo3' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x3',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y3',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::curveTo3',
    ),
    'curveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$x2',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$y2',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x3',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y3',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::curveTo',
    ),
    'drawImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$image',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::drawImage',
    ),
    'ellipse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$xray',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$yray',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::ellipse',
    ),
    'endPath' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruPage::endPath',
    ),
    'endText' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruPage::endText',
    ),
    'eofill' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruPage::eofill',
    ),
    'eoFillStroke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$close_path',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::eoFillStroke',
    ),
    'fill' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruPage::fill',
    ),
    'fillStroke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$close_path',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::fillStroke',
    ),
    'getCharSpace' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getCharSpace',
    ),
    'getCMYKFill' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getCMYKFill',
    ),
    'getCMYKStroke' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getCMYKStroke',
    ),
    'getCurrentFont' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'object',
      'name' => 'HaruPage::getCurrentFont',
    ),
    'getCurrentFontSize' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getCurrentFontSize',
    ),
    'getCurrentPos' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getCurrentPos',
    ),
    'getCurrentTextPos' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getCurrentTextPos',
    ),
    'getDash' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getDash',
    ),
    'getFillingColorSpace' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruPage::getFillingColorSpace',
    ),
    'getFlatness' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getFlatness',
    ),
    'getGMode' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruPage::getGMode',
    ),
    'getGrayFill' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getGrayFill',
    ),
    'getGrayStroke' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getGrayStroke',
    ),
    'getHeight' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getHeight',
    ),
    'getHorizontalScaling' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getHorizontalScaling',
    ),
    'getLineCap' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruPage::getLineCap',
    ),
    'getLineJoin' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruPage::getLineJoin',
    ),
    'getLineWidth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getLineWidth',
    ),
    'getMiterLimit' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getMiterLimit',
    ),
    'getRGBFill' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getRGBFill',
    ),
    'getRGBStroke' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getRGBStroke',
    ),
    'getStrokingColorSpace' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruPage::getStrokingColorSpace',
    ),
    'getTextLeading' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getTextLeading',
    ),
    'getTextMatrix' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getTextMatrix',
    ),
    'getTextRenderingMode' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruPage::getTextRenderingMode',
    ),
    'getTextRise' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getTextRise',
    ),
    'getTextWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'HaruPage::getTextWidth',
    ),
    'getTransMatrix' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruPage::getTransMatrix',
    ),
    'getWidth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getWidth',
    ),
    'getWordSpace' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'HaruPage::getWordSpace',
    ),
    'lineTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::lineTo',
    ),
    'measureText' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$wordwrap',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'HaruPage::measureText',
    ),
    'moveTextPos' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$set_leading',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::moveTextPos',
    ),
    'moveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::moveTo',
    ),
    'moveToNextLine' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruPage::moveToNextLine',
    ),
    'rectangle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::rectangle',
    ),
    'setCharSpace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$char_space',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setCharSpace',
    ),
    'setCMYKFill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$c',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$m',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$k',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setCMYKFill',
    ),
    'setCMYKStroke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$c',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$m',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$k',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setCMYKStroke',
    ),
    'setDash' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$pattern',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$phase',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setDash',
    ),
    'setFlatness' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$flatness',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setFlatness',
    ),
    'setFontAndSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$font',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$size',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setFontAndSize',
    ),
    'setGrayFill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setGrayFill',
    ),
    'setGrayStroke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setGrayStroke',
    ),
    'setHeight' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setHeight',
    ),
    'setHorizontalScaling' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$scaling',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setHorizontalScaling',
    ),
    'setLineCap' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$cap',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setLineCap',
    ),
    'setLineJoin' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$join',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setLineJoin',
    ),
    'setLineWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setLineWidth',
    ),
    'setMiterLimit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$limit',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setMiterLimit',
    ),
    'setRGBFill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$r',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$g',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$b',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setRGBFill',
    ),
    'setRGBStroke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$r',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$g',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$b',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setRGBStroke',
    ),
    'setRotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setRotate',
    ),
    'setSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$size',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$direction',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setSize',
    ),
    'setSlideShow' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$type',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$disp_time',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$trans_time',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setSlideShow',
    ),
    'setTextLeading' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$text_leading',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setTextLeading',
    ),
    'setTextMatrix' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$b',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$c',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$d',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setTextMatrix',
    ),
    'setTextRenderingMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setTextRenderingMode',
    ),
    'setTextRise' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$rise',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setTextRise',
    ),
    'setWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setWidth',
    ),
    'setWordSpace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$word_space',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::setWordSpace',
    ),
    'showText' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::showText',
    ),
    'showTextNextLine' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$word_space',
          'initializer' => '= 0',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$char_space',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::showTextNextLine',
    ),
    'stroke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$close_path',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::stroke',
    ),
    'textOut' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::textOut',
    ),
    'textRect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$left',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$top',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$right',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$bottom',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$align',
          'initializer' => '= HaruPage::TALIGN_LEFT',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruPage::textRect',
    ),
  ),
  'HaruFont' => 
  array (
    'getAscent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruFont::getAscent',
    ),
    'getCapHeight' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruFont::getCapHeight',
    ),
    'getDescent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruFont::getDescent',
    ),
    'getEncodingName' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'HaruFont::getEncodingName',
    ),
    'getFontName' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'HaruFont::getFontName',
    ),
    'getTextWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'type' => 'array',
      'name' => 'HaruFont::getTextWidth',
    ),
    'getUnicodeWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$character',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'HaruFont::getUnicodeWidth',
    ),
    'getXHeight' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruFont::getXHeight',
    ),
    'measureText' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$font_size',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$char_space',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$word_space',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'bool',
          'name' => '$word_wrap',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'HaruFont::measureText',
    ),
  ),
  'HaruImage' => 
  array (
    'getBitsPerComponent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruImage::getBitsPerComponent',
    ),
    'getColorSpace' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'HaruImage::getColorSpace',
    ),
    'getHeight' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruImage::getHeight',
    ),
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'HaruImage::getSize',
    ),
    'getWidth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruImage::getWidth',
    ),
    'setColorMask' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$rmin',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$rmax',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$gmin',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$gmax',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$bmin',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$bmax',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruImage::setColorMask',
    ),
    'setMaskImage' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$mask_image',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruImage::setMaskImage',
    ),
  ),
  'HaruEncoder' => 
  array (
    'getByteType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'HaruEncoder::getByteType',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruEncoder::getType',
    ),
    'getUnicode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$character',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'HaruEncoder::getUnicode',
    ),
    'getWritingMode' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'HaruEncoder::getWritingMode',
    ),
  ),
  'HaruOutline' => 
  array (
    'setDestination' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$destination',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruOutline::setDestination',
    ),
    'setOpened' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$opened',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruOutline::setOpened',
    ),
  ),
  'HaruAnnotation' => 
  array (
    'setBorderStyle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$dash_on',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$dash_off',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruAnnotation::setBorderStyle',
    ),
    'setHighlightMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruAnnotation::setHighlightMode',
    ),
    'setIcon' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$icon',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruAnnotation::setIcon',
    ),
    'setOpened' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$opened',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruAnnotation::setOpened',
    ),
  ),
  'HaruDestination' => 
  array (
    'setFit' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setFit',
    ),
    'setFitB' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setFitB',
    ),
    'setFitBH' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$top',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setFitBH',
    ),
    'setFitBV' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$left',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setFitBV',
    ),
    'setFitH' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$top',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setFitH',
    ),
    'setFitR' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$left',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$bottom',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$right',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$top',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setFitR',
    ),
    'setFitV' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$left',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setFitV',
    ),
    'setXYZ' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$left',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$top',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$zoom',
          'required' => true,
        ),
      ),
      'type' => 'bool',
      'name' => 'HaruDestination::setXYZ',
    ),
  ),
  'SWFAction' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$script',
          'required' => true,
        ),
      ),
      'name' => 'SWFAction::__construct',
      'type' => 'string',
    ),
  ),
  'SWFBitmap' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$alphafile',
          'required' => false,
        ),
      ),
      'name' => 'SWFBitmap::__construct',
      'type' => 'mixed',
    ),
    'getHeight' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFBitmap::getHeight',
    ),
    'getWidth' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFBitmap::getWidth',
    ),
  ),
  'SWFButton' => 
  array (
    'addAction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFAction',
          'name' => '$action',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::addAction',
    ),
    'addASound' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFSound',
          'name' => '$sound',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'type' => 'SWFSoundInstance',
      'name' => 'SWFButton::addASound',
    ),
    'addShape' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFShape',
          'name' => '$shape',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::addShape',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'SWFButton::__construct',
    ),
    'setAction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFAction',
          'name' => '$action',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::setAction',
    ),
    'setDown' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFShape',
          'name' => '$shape',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::setDown',
    ),
    'setHit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFShape',
          'name' => '$shape',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::setHit',
    ),
    'setMenu' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flag',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::setMenu',
    ),
    'setOver' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFShape',
          'name' => '$shape',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::setOver',
    ),
    'setUp' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFShape',
          'name' => '$shape',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFButton::setUp',
    ),
  ),
  'SWFDisplayItem' => 
  array (
    'addAction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFAction',
          'name' => '$action',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::addAction',
    ),
    'addColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$blue',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$a',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::addColor',
    ),
    'endMask' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::endMask',
    ),
    'getRot' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFDisplayItem::getRot',
    ),
    'getX' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFDisplayItem::getX',
    ),
    'getXScale' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFDisplayItem::getXScale',
    ),
    'getXSkew' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFDisplayItem::getXSkew',
    ),
    'getY' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFDisplayItem::getY',
    ),
    'getYScale' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFDisplayItem::getYScale',
    ),
    'getYSkew' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFDisplayItem::getYSkew',
    ),
    'move' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$dx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::move',
    ),
    'moveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::moveTo',
    ),
    'multColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$blue',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$a',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::multColor',
    ),
    'remove' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::remove',
    ),
    'rotate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::rotate',
    ),
    'rotateTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::rotateTo',
    ),
    'scale' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$dx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::scale',
    ),
    'scaleTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::scaleTo',
    ),
    'setDepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$depth',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::setDepth',
    ),
    'setMaskLevel' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$level',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::setMaskLevel',
    ),
    'setMatrix' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$a',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$b',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$c',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$d',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::setMatrix',
    ),
    'setName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::setName',
    ),
    'setRatio' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$ratio',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::setRatio',
    ),
    'skewX' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$ddegrees',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::skewX',
    ),
    'skewXTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::skewXTo',
    ),
    'skewY' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$ddegrees',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::skewY',
    ),
    'skewYTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$degrees',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFDisplayItem::skewYTo',
    ),
  ),
  'SWFFill' => 
  array (
    'moveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFFill::moveTo',
    ),
    'rotateTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$angle',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFFill::rotateTo',
    ),
    'scaleTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFFill::scaleTo',
    ),
    'skewXTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFFill::skewXTo',
    ),
    'skewYTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFFill::skewYTo',
    ),
  ),
  'SWFFont' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
      ),
      'name' => 'SWFFont::__construct',
      'type' => 'string',
    ),
    'getAscent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFFont::getAscent',
    ),
    'getDescent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFFont::getDescent',
    ),
    'getLeading' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFFont::getLeading',
    ),
    'getShape' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$code',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'SWFFont::getShape',
    ),
    'getUTF8Width' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'SWFFont::getUTF8Width',
    ),
    'getWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'SWFFont::getWidth',
    ),
  ),
  'SWFFontChar' => 
  array (
    'addChars' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$char',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFFontChar::addChars',
    ),
    'addUTF8Chars' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$char',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFFontChar::addUTF8Chars',
    ),
  ),
  'SWFGradient' => 
  array (
    'addEntry' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$ratio',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$red',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$green',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$blue',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$alpha',
          'initializer' => '= 255',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFGradient::addEntry',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'SWFGradient::__construct',
    ),
  ),
  'SWFMorph' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'SWFMorph::__construct',
    ),
    'getShape1' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'SWFShape',
      'name' => 'SWFMorph::getShape1',
    ),
    'getShape2' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'SWFShape',
      'name' => 'SWFMorph::getShape2',
    ),
  ),
  'SWFMovie' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$instance',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'SWFMovie::add',
    ),
    'addExport' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFCharacter',
          'name' => '$char',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::addExport',
    ),
    'addFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFFont',
          'name' => '$font',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'SWFMovie::addFont',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$version',
          'required' => false,
        ),
      ),
      'name' => 'SWFMovie::__construct',
      'type' => 'int',
    ),
    'importChar' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$libswf',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'SWFSprite',
      'name' => 'SWFMovie::importChar',
    ),
    'importFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$libswf',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'SWFFontChar',
      'name' => 'SWFMovie::importFont',
    ),
    'labelFrame' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$label',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::labelFrame',
    ),
    'nextFrame' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'SWFMovie::nextFrame',
    ),
    'output' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFMovie::output',
    ),
    'remove' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$instance',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::remove',
    ),
    'save' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFMovie::save',
    ),
    'saveToFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$compression',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFMovie::saveToFile',
    ),
    'setbackground' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$blue',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::setbackground',
    ),
    'setDimension' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::setDimension',
    ),
    'setFrames' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$number',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::setFrames',
    ),
    'setRate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$rate',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::setRate',
    ),
    'startSound' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFSound',
          'name' => '$sound',
          'required' => true,
        ),
      ),
      'type' => 'SWFSoundInstance',
      'name' => 'SWFMovie::startSound',
    ),
    'stopSound' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFSound',
          'name' => '$sound',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFMovie::stopSound',
    ),
    'streamMP3' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$mp3file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$skip',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFMovie::streamMP3',
    ),
    'writeExports' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'SWFMovie::writeExports',
    ),
  ),
  'SWFPrebuiltClip' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$file',
          'required' => true,
        ),
      ),
      'name' => 'SWFPrebuiltClip::__construct',
      'type' => 'mixed',
    ),
  ),
  'SWFShape' => 
  array (
    'addFill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$blue',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$alpha',
          'initializer' => '= 255',
          'required' => false,
        ),
      ),
      'type' => 'SWFFill',
      'name' => 'SWFShape::addFill',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'SWFShape::__construct',
    ),
    'drawArc' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$r',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$startAngle',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$endAngle',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::drawArc',
    ),
    'drawCircle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$r',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::drawCircle',
    ),
    'drawCubic' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$bx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$by',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$cx',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$cy',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$dx',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFShape::drawCubic',
    ),
    'drawCubicTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$bx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$by',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$cx',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$cy',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$dx',
          'required' => true,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFShape::drawCubicTo',
    ),
    'drawCurve' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$controldx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$controldy',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$anchordx',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$anchordy',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$targetdx',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$targetdy',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFShape::drawCurve',
    ),
    'drawCurveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$controlx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$controly',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$anchorx',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'float',
          'name' => '$anchory',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'float',
          'name' => '$targetx',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'float',
          'name' => '$targety',
          'required' => false,
        ),
      ),
      'type' => 'int',
      'name' => 'SWFShape::drawCurveTo',
    ),
    'drawGlyph' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFFont',
          'name' => '$font',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$character',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$size',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::drawGlyph',
    ),
    'drawLine' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$dx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::drawLine',
    ),
    'drawLineTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::drawLineTo',
    ),
    'movePen' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$dx',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$dy',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::movePen',
    ),
    'movePenTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::movePenTo',
    ),
    'setLeftFill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFGradient',
          'name' => '$fill',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::setLeftFill',
    ),
    'setLine' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFShape',
          'name' => '$shape',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::setLine',
    ),
    'setRightFill' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFGradient',
          'name' => '$fill',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFShape::setRightFill',
    ),
  ),
  'SWFSound' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'name' => 'SWFSound::__construct',
      'type' => 'string',
    ),
  ),
  'SWFSoundInstance' => 
  array (
    'loopCount' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$point',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSoundInstance::loopCount',
    ),
    'loopInPoint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$point',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSoundInstance::loopInPoint',
    ),
    'loopOutPoint' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$point',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSoundInstance::loopOutPoint',
    ),
    'noMultiple' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'SWFSoundInstance::noMultiple',
    ),
  ),
  'SWFSprite' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSprite::add',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'SWFSprite::__construct',
    ),
    'labelFrame' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$label',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSprite::labelFrame',
    ),
    'nextFrame' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'void',
      'name' => 'SWFSprite::nextFrame',
    ),
    'remove' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSprite::remove',
    ),
    'setFrames' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$number',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSprite::setFrames',
    ),
    'startSound' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFSound',
          'name' => '$sount',
          'required' => true,
        ),
      ),
      'type' => 'SWFSoundInstance',
      'name' => 'SWFSprite::startSound',
    ),
    'stopSound' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFSound',
          'name' => '$sount',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFSprite::stopSound',
    ),
  ),
  'SWFText' => 
  array (
    'addString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFText::addString',
    ),
    'addUTF8String' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$text',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFText::addUTF8String',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'SWFText::__construct',
    ),
    'getAscent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFText::getAscent',
    ),
    'getDescent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFText::getDescent',
    ),
    'getLeading' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'float',
      'name' => 'SWFText::getLeading',
    ),
    'getUTF8Width' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'SWFText::getUTF8Width',
    ),
    'getWidth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
      ),
      'type' => 'float',
      'name' => 'SWFText::getWidth',
    ),
    'moveTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFText::moveTo',
    ),
    'setColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$blue',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$a',
          'initializer' => '= 255',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFText::setColor',
    ),
    'setFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFFont',
          'name' => '$font',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFText::setFont',
    ),
    'setHeight' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFText::setHeight',
    ),
    'setSpacing' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$spacing',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFText::setSpacing',
    ),
  ),
  'SWFTextField' => 
  array (
    'addChars' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$chars',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::addChars',
    ),
    'addString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$string',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::addString',
    ),
    'align' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$alignement',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::align',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'name' => 'SWFTextField::__construct',
      'type' => 'int',
    ),
    'setBounds' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setBounds',
    ),
    'setColor' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$red',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$green',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$blue',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$a',
          'initializer' => '= 255',
          'required' => false,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setColor',
    ),
    'setFont' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SWFFont',
          'name' => '$font',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setFont',
    ),
    'setHeight' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setHeight',
    ),
    'setIndentation' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setIndentation',
    ),
    'setLeftMargin' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setLeftMargin',
    ),
    'setLineSpacing' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$height',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setLineSpacing',
    ),
    'setMargins' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$left',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'float',
          'name' => '$right',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setMargins',
    ),
    'setName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setName',
    ),
    'setPadding' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$padding',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setPadding',
    ),
    'setRightMargin' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$width',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFTextField::setRightMargin',
    ),
  ),
  'SWFVideoStream' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => false,
        ),
      ),
      'name' => 'SWFVideoStream::__construct',
      'type' => 'string',
    ),
    'getNumFrames' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'SWFVideoStream::getNumFrames',
    ),
    'setDimension' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$x',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$y',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SWFVideoStream::setDimension',
    ),
  ),
  'Ev' => 
  array (
    'backend' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'int',
      'name' => 'Ev::backend',
    ),
    'depth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'int',
      'name' => 'Ev::depth',
    ),
    'embeddableBackends' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::embeddableBackends',
    ),
    'feedSignal' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$signum',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::feedSignal',
    ),
    'feedSignalEvent' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$signum',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::feedSignalEvent',
    ),
    'iteration' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'int',
      'name' => 'Ev::iteration',
    ),
    'now' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'double',
      'name' => 'Ev::now',
    ),
    'nowUpdate' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::nowUpdate',
    ),
    'recommendedBackends' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::recommendedBackends',
    ),
    'resume' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::resume',
    ),
    'run' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::run',
    ),
    'sleep' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$seconds',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::sleep',
    ),
    'stop' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$how',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::stop',
    ),
    'supportedBackends' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::supportedBackends',
    ),
    'suspend' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::suspend',
    ),
    'time' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'double',
      'name' => 'Ev::time',
    ),
    'verify' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Ev::verify',
    ),
  ),
  'EvWatcher' => 
  array (
    'clear' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'EvWatcher::clear',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'name' => 'EvWatcher::__construct',
    ),
    'feed' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$revents',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvWatcher::feed',
    ),
    'getLoop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'EvLoop',
      'name' => 'EvWatcher::getLoop',
    ),
    'invoke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$revents',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvWatcher::invoke',
    ),
    'keepalive' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$value',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'EvWatcher::keepalive',
    ),
    'setCallback' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvWatcher::setCallback',
    ),
    'start' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvWatcher::start',
    ),
    'stop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvWatcher::stop',
    ),
  ),
  'EvCheck' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvCheck::__construct',
      'type' => 'callable',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'object',
      'name' => 'EvCheck::createStopped',
    ),
  ),
  'EvChild' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$pid',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$trace',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvChild::__construct',
      'type' => 'int',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$pid',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$trace',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'object',
      'name' => 'EvChild::createStopped',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$pid',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$trace',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvChild::set',
    ),
  ),
  'EvEmbed' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$other',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvEmbed::__construct',
      'type' => 'object',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$other',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'EvEmbed::createStopped',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$other',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvEmbed::set',
    ),
    'sweep' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvEmbed::sweep',
    ),
  ),
  'EvFork' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvFork::__construct',
      'type' => 'callable',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'object',
      'name' => 'EvFork::createStopped',
    ),
  ),
  'EvIdle' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvIdle::__construct',
      'type' => 'callable',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'object',
      'name' => 'EvIdle::createStopped',
    ),
  ),
  'EvIo' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$fd',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$events',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvIo::__construct',
      'type' => 'mixed',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$fd',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$events',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvIo',
      'name' => 'EvIo::createStopped',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$fd',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$events',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvIo::set',
    ),
  ),
  'EvLoop' => 
  array (
    'backend' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'EvLoop::backend',
    ),
    'check' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvCheck',
      'name' => 'EvLoop::check',
    ),
    'child' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pid',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$trace',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvChild',
      'name' => 'EvLoop::child',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'double',
          'name' => '$io_interval',
          'initializer' => '= 0.0',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'double',
          'name' => '$timeout_interval',
          'initializer' => '= 0.0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvLoop::__construct',
      'type' => 'int',
    ),
    'defaultLoop' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= Ev::FLAG_AUTO',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'double',
          'name' => '$io_interval',
          'initializer' => '= 0.',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'double',
          'name' => '$timeout_interval',
          'initializer' => '= 0.',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'EvLoop',
      'name' => 'EvLoop::defaultLoop',
    ),
    'embed' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$other',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$callback',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvEmbed',
      'name' => 'EvLoop::embed',
    ),
    'fork' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvFork',
      'name' => 'EvLoop::fork',
    ),
    'idle' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvIdle',
      'name' => 'EvLoop::idle',
    ),
    'invokePending' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::invokePending',
    ),
    'io' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$fd',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$events',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvIo',
      'name' => 'EvLoop::io',
    ),
    'loopFork' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::loopFork',
    ),
    'now' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'double',
      'name' => 'EvLoop::now',
    ),
    'nowUpdate' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::nowUpdate',
    ),
    'periodic' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$interval',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvPeriodic',
      'name' => 'EvLoop::periodic',
    ),
    'prepare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvPrepare',
      'name' => 'EvLoop::prepare',
    ),
    'resume' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::resume',
    ),
    'run' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::run',
    ),
    'signal' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$signum',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvSignal',
      'name' => 'EvLoop::signal',
    ),
    'stat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$interval',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvStat',
      'name' => 'EvLoop::stat',
    ),
    'stop' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$how',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::stop',
    ),
    'suspend' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::suspend',
    ),
    'timer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$after',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$repeat',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvTimer',
      'name' => 'EvLoop::timer',
    ),
    'verify' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvLoop::verify',
    ),
  ),
  'EvPeriodic' => 
  array (
    'again' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvPeriodic::again',
    ),
    'at' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'double',
      'name' => 'EvPeriodic::at',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$interval',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$reschedule_cb',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvPeriodic::__construct',
      'type' => 'double',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$interval',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$reschedule_cb',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        5 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvPeriodic',
      'name' => 'EvPeriodic::createStopped',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$interval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvPeriodic::set',
    ),
  ),
  'EvPrepare' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$priority',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvPrepare::__construct',
      'type' => 'string',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvPrepare',
      'name' => 'EvPrepare::createStopped',
    ),
  ),
  'EvSignal' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$signum',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvSignal::__construct',
      'type' => 'int',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$signum',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvSignal',
      'name' => 'EvSignal::createStopped',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$signum',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvSignal::set',
    ),
  ),
  'EvStat' => 
  array (
    'attr' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'EvStat::attr',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$interval',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvStat::__construct',
      'type' => 'string',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$interval',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'EvStat::createStopped',
    ),
    'prev' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvStat::prev',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$interval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvStat::set',
    ),
    'stat' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'EvStat::stat',
    ),
  ),
  'EvTimer' => 
  array (
    'again' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvTimer::again',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$after',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$repeat',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EvTimer::__construct',
      'type' => 'double',
    ),
    'createStopped' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$after',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$repeat',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$callback',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'EvTimer',
      'name' => 'EvTimer::createStopped',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$after',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'double',
          'name' => '$repeat',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EvTimer::set',
    ),
  ),
  'Threaded' => 
  array (
    'chunk' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$size',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'boolean',
          'name' => '$preserve',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Threaded::chunk',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Threaded::count',
    ),
    'extend' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Threaded::extend',
    ),
    'from' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Closure',
          'name' => '$run',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Closure',
          'name' => '$construct',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$args',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Threaded',
      'name' => 'Threaded::from',
    ),
    'getTerminationInfo' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Threaded::getTerminationInfo',
    ),
    'isRunning' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::isRunning',
    ),
    'isTerminated' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::isTerminated',
    ),
    'isWaiting' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::isWaiting',
    ),
    'lock' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::lock',
    ),
    'merge' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$from',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$overwrite',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::merge',
    ),
    'notify' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::notify',
    ),
    'pop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::pop',
    ),
    'run' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Threaded::run',
    ),
    'shift' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Threaded::shift',
    ),
    'synchronized' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Closure',
          'name' => '$block',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$...',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Threaded::synchronized',
    ),
    'unlock' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::unlock',
    ),
    'wait' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$timeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Threaded::wait',
    ),
  ),
  'Thread' => 
  array (
    'detach' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Thread::detach',
    ),
    'getCreatorId' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Thread::getCreatorId',
    ),
    'getCurrentThread' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Thread',
      'name' => 'Thread::getCurrentThread',
    ),
    'getCurrentThreadId' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Thread::getCurrentThreadId',
    ),
    'getThreadId' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Thread::getThreadId',
    ),
    'globally' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Thread::globally',
    ),
    'isJoined' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Thread::isJoined',
    ),
    'isStarted' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Thread::isStarted',
    ),
    'join' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Thread::join',
    ),
    'kill' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Thread::kill',
    ),
    'start' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Thread::start',
    ),
  ),
  'Worker' => 
  array (
    'getStacked' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Worker::getStacked',
    ),
    'isShutdown' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Worker::isShutdown',
    ),
    'isWorking' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Worker::isWorking',
    ),
    'shutdown' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'boolean',
      'name' => 'Worker::shutdown',
    ),
    'stack' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Threaded',
          'name' => '&$work',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Worker::stack',
    ),
    'unstack' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Threaded',
          'name' => '&$work',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Worker::unstack',
    ),
  ),
  'Collectable' => 
  array (
    'isGarbage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Collectable::isGarbage',
    ),
    'setGarbage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Collectable::setGarbage',
    ),
  ),
  'Pool' => 
  array (
    'collect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Callable',
          'name' => '$collector',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Pool::collect',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$size',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$class',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$ctor',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Pool',
      'name' => 'Pool::__construct',
    ),
    'resize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$size',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Pool::resize',
    ),
    'shutdown' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Pool::shutdown',
    ),
    'submit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Threaded',
          'name' => '$task',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Pool::submit',
    ),
    'submitTo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$worker',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Threaded',
          'name' => '$task',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'integer',
      'name' => 'Pool::submitTo',
    ),
  ),
  'Mutex' => 
  array (
    'create' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'boolean',
          'name' => '$lock',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'long',
      'name' => 'Mutex::create',
    ),
    'destroy' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$mutex',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Mutex::destroy',
    ),
    'lock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$mutex',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Mutex::lock',
    ),
    'trylock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$mutex',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Mutex::trylock',
    ),
    'unlock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$mutex',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'boolean',
          'name' => '$destroy',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Mutex::unlock',
    ),
  ),
  'Cond' => 
  array (
    'broadcast' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$condition',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Cond::broadcast',
    ),
    'create' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'long',
      'name' => 'Cond::create',
    ),
    'destroy' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$condition',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Cond::destroy',
    ),
    'signal' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$condition',
          'required' => true,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Cond::signal',
    ),
    'wait' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'long',
          'name' => '$condition',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'long',
          'name' => '$mutex',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'long',
          'name' => '$timeout',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'type' => 'boolean',
      'name' => 'Cond::wait',
    ),
  ),
  'SyncMutex' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SyncMutex::__construct',
      'type' => 'string',
    ),
    'lock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$wait',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncMutex::lock',
    ),
    'unlock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$all',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncMutex::unlock',
    ),
  ),
  'SyncSemaphore' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'integer',
          'name' => '$initialval',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$autounlock',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SyncSemaphore::__construct',
      'type' => 'string',
    ),
    'lock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$wait',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncSemaphore::lock',
    ),
    'unlock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '&$prevcount',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncSemaphore::unlock',
    ),
  ),
  'SyncEvent' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$manual',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SyncEvent::__construct',
      'type' => 'string',
    ),
    'fire' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncEvent::fire',
    ),
    'reset' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncEvent::reset',
    ),
    'wait' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$wait',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncEvent::wait',
    ),
  ),
  'SyncReaderWriter' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$autounlock',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SyncReaderWriter::__construct',
      'type' => 'string',
    ),
    'readlock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$wait',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncReaderWriter::readlock',
    ),
    'readunlock' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncReaderWriter::readunlock',
    ),
    'writelock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'integer',
          'name' => '$wait',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncReaderWriter::writelock',
    ),
    'writeunlock' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SyncReaderWriter::writeunlock',
    ),
  ),
  'FANNConnection' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$from_neuron',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$to_neuron',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'float',
          'name' => '$weight',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'FANNConnection::__construct',
      'type' => 'int',
    ),
    'getFromNeuron' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'FANNConnection::getFromNeuron',
    ),
    'getToNeuron' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'FANNConnection::getToNeuron',
    ),
    'getWeight' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'FANNConnection::getWeight',
    ),
    'setWeight' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'float',
          'name' => '$weight',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'FANNConnection::setWeight',
    ),
  ),
  'JsonSerializable' => 
  array (
    'jsonSerialize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'mixed',
      'name' => 'JsonSerializable::jsonSerialize',
    ),
  ),
  'Judy' => 
  array (
    'byCount' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$nth_index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::byCount',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$judy_type',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Judy::__construct',
      'type' => 'int',
    ),
    'count' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index_start',
          'initializer' => '= 0',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$index_end',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::count',
    ),
    '__destruct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Judy::__destruct',
    ),
    'first' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Judy::first',
    ),
    'firstEmpty' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::firstEmpty',
    ),
    'free' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::free',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::getType',
    ),
    'last' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Judy::last',
    ),
    'lastEmpty' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::lastEmpty',
    ),
    'memoryUsage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::memoryUsage',
    ),
    'next' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Judy::next',
    ),
    'nextEmpty' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::nextEmpty',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Judy::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Judy::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Judy::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$offset',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Judy::offsetUnset',
    ),
    'prev' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Judy::prev',
    ),
    'prevEmpty' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Judy::prevEmpty',
    ),
    'size' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Judy::size',
    ),
  ),
  'Lua' => 
  array (
    'assign' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Lua::assign',
    ),
    'call' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$lua_func',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$args',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$use_self',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Lua::call',
    ),
    '__call' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$lua_func',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$args',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$use_self',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Lua::__call',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$lua_script_file',
          'initializer' => '= NULL',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Lua::__construct',
      'type' => 'string',
    ),
    'eval' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$statements',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Lua::eval',
    ),
    'getVersion' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Lua::getVersion',
    ),
    'include' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Lua::include',
    ),
    'registerCallback' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$function',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Lua::registerCallback',
    ),
  ),
  'LuaClosure' => 
  array (
    '__invoke' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$arg',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$...',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'LuaClosure::__invoke',
    ),
  ),
  'SplDoublyLinkedList' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$newval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::add',
    ),
    'bottom' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplDoublyLinkedList::bottom',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplDoublyLinkedList::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplDoublyLinkedList::current',
    ),
    'getIteratorMode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplDoublyLinkedList::getIteratorMode',
    ),
    'isEmpty' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplDoublyLinkedList::isEmpty',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplDoublyLinkedList::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplDoublyLinkedList::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplDoublyLinkedList::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$newval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::offsetUnset',
    ),
    'pop' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplDoublyLinkedList::pop',
    ),
    'prev' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::prev',
    ),
    'push' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::push',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::rewind',
    ),
    'serialize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplDoublyLinkedList::serialize',
    ),
    'setIteratorMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::setIteratorMode',
    ),
    'shift' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplDoublyLinkedList::shift',
    ),
    'top' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplDoublyLinkedList::top',
    ),
    'unserialize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$serialized',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::unserialize',
    ),
    'unshift' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplDoublyLinkedList::unshift',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplDoublyLinkedList::valid',
    ),
  ),
  'SplStack' => 
  array (
    'setIteratorMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SplStack::setIteratorMode',
    ),
  ),
  'SplQueue' => 
  array (
    'dequeue' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'mixed',
      'name' => 'SplQueue::dequeue',
    ),
    'enqueue' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SplQueue::enqueue',
    ),
    'setIteratorMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'type' => 'void',
      'name' => 'SplQueue::setIteratorMode',
    ),
  ),
  'SplHeap' => 
  array (
    'compare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value2',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'int',
      'name' => 'SplHeap::compare',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplHeap::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplHeap::current',
    ),
    'extract' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplHeap::extract',
    ),
    'insert' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplHeap::insert',
    ),
    'isEmpty' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplHeap::isEmpty',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplHeap::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplHeap::next',
    ),
    'recoverFromCorruption' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplHeap::recoverFromCorruption',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplHeap::rewind',
    ),
    'top' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplHeap::top',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplHeap::valid',
    ),
  ),
  'SplMaxHeap' => 
  array (
    'compare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value2',
          'required' => true,
        ),
      ),
      'modifier' => 'protected',
      'type' => 'int',
      'name' => 'SplMaxHeap::compare',
    ),
  ),
  'SplMinHeap' => 
  array (
    'compare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value2',
          'required' => true,
        ),
      ),
      'modifier' => 'protected',
      'type' => 'int',
      'name' => 'SplMinHeap::compare',
    ),
  ),
  'SplPriorityQueue' => 
  array (
    'compare' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$priority1',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$priority2',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplPriorityQueue::compare',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplPriorityQueue::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplPriorityQueue::current',
    ),
    'extract' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplPriorityQueue::extract',
    ),
    'insert' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$priority',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplPriorityQueue::insert',
    ),
    'isEmpty' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplPriorityQueue::isEmpty',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplPriorityQueue::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplPriorityQueue::next',
    ),
    'recoverFromCorruption' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplPriorityQueue::recoverFromCorruption',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplPriorityQueue::rewind',
    ),
    'setExtractFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplPriorityQueue::setExtractFlags',
    ),
    'top' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplPriorityQueue::top',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplPriorityQueue::valid',
    ),
  ),
  'SplFixedArray' => 
  array (
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFixedArray::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplFixedArray::current',
    ),
    'fromArray' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$array',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$save_indexes',
          'initializer' => '= true',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SplFixedArray',
      'name' => 'SplFixedArray::fromArray',
    ),
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFixedArray::getSize',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFixedArray::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFixedArray::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFixedArray::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplFixedArray::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$newval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFixedArray::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFixedArray::offsetUnset',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFixedArray::rewind',
    ),
    'setSize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$size',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFixedArray::setSize',
    ),
    'toArray' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SplFixedArray::toArray',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFixedArray::valid',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFixedArray::__wakeup',
    ),
  ),
  'SplObjectStorage' => 
  array (
    'addAll' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SplObjectStorage',
          'name' => '$storage',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::addAll',
    ),
    'attach' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::attach',
    ),
    'contains' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplObjectStorage::contains',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplObjectStorage::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'object',
      'name' => 'SplObjectStorage::current',
    ),
    'detach' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::detach',
    ),
    'getHash' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplObjectStorage::getHash',
    ),
    'getInfo' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplObjectStorage::getInfo',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplObjectStorage::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplObjectStorage::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplObjectStorage::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'object',
          'name' => '$object',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::offsetUnset',
    ),
    'removeAll' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SplObjectStorage',
          'name' => '$storage',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::removeAll',
    ),
    'removeAllExcept' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SplObjectStorage',
          'name' => '$storage',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::removeAllExcept',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::rewind',
    ),
    'serialize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplObjectStorage::serialize',
    ),
    'setInfo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$data',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::setInfo',
    ),
    'unserialize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$serialized',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplObjectStorage::unserialize',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplObjectStorage::valid',
    ),
  ),
  'IteratorIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Traversable',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'IteratorIterator::__construct',
      'type' => 'Traversable',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'IteratorIterator::current',
    ),
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Traversable',
      'name' => 'IteratorIterator::getInnerIterator',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'scalar',
      'name' => 'IteratorIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'IteratorIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'IteratorIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'IteratorIterator::valid',
    ),
  ),
  'AppendIterator' => 
  array (
    'append' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'AppendIterator::append',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'AppendIterator::current',
    ),
    'getArrayIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'AppendIterator::getArrayIterator',
    ),
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Iterator',
      'name' => 'AppendIterator::getInnerIterator',
    ),
    'getIteratorIndex' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'AppendIterator::getIteratorIndex',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'scalar',
      'name' => 'AppendIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'AppendIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'AppendIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'AppendIterator::valid',
    ),
  ),
  'ArrayIterator' => 
  array (
    'append' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::append',
    ),
    'asort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::asort',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$array',
          'initializer' => '= array()',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'ArrayIterator::__construct',
      'type' => 'mixed',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'ArrayIterator::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'ArrayIterator::current',
    ),
    'getArrayCopy' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'ArrayIterator::getArrayCopy',
    ),
    'getFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::getFlags',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'ArrayIterator::key',
    ),
    'ksort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::ksort',
    ),
    'natcasesort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::natcasesort',
    ),
    'natsort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::natsort',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'ArrayIterator::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$newval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::offsetUnset',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::rewind',
    ),
    'seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$position',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::seek',
    ),
    'serialize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'ArrayIterator::serialize',
    ),
    'setFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::setFlags',
    ),
    'uasort' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$cmp_function',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::uasort',
    ),
    'uksort' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$cmp_function',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayIterator::uksort',
    ),
    'unserialize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$serialized',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'ArrayIterator::unserialize',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'ArrayIterator::valid',
    ),
  ),
  'CachingIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$flags',
          'initializer' => '= self::CALL_TOSTRING',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CachingIterator::__construct',
      'type' => 'Iterator',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'CachingIterator::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::current',
    ),
    'getCache' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'CachingIterator::getCache',
    ),
    'getFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::getFlags',
    ),
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Iterator',
      'name' => 'CachingIterator::getInnerIterator',
    ),
    'hasNext' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::hasNext',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'scalar',
      'name' => 'CachingIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$newval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::offsetUnset',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::rewind',
    ),
    'setFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bitmask',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::setFlags',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::__toString',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CachingIterator::valid',
    ),
  ),
  'FilterIterator' => 
  array (
    'accept' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'FilterIterator::accept',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'FilterIterator::__construct',
      'type' => 'Iterator',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'FilterIterator::current',
    ),
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Iterator',
      'name' => 'FilterIterator::getInnerIterator',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'FilterIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'FilterIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'FilterIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'FilterIterator::valid',
    ),
  ),
  'CallbackFilterIterator' => 
  array (
    'accept' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'CallbackFilterIterator::accept',
    ),
  ),
  'DirectoryIterator' => 
  array (
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'DirectoryIterator',
      'name' => 'DirectoryIterator::current',
    ),
    'getATime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getATime',
    ),
    'getBasename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$suffix',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::getBasename',
    ),
    'getCTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getCTime',
    ),
    'getExtension' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::getExtension',
    ),
    'getFilename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::getFilename',
    ),
    'getGroup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getGroup',
    ),
    'getInode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getInode',
    ),
    'getMTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getMTime',
    ),
    'getOwner' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getOwner',
    ),
    'getPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::getPath',
    ),
    'getPathname' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::getPathname',
    ),
    'getPerms' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getPerms',
    ),
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'DirectoryIterator::getSize',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::getType',
    ),
    'isDir' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::isDir',
    ),
    'isDot' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::isDot',
    ),
    'isExecutable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::isExecutable',
    ),
    'isFile' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::isFile',
    ),
    'isLink' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::isLink',
    ),
    'isReadable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::isReadable',
    ),
    'isWritable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::isWritable',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'DirectoryIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'DirectoryIterator::rewind',
    ),
    'seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$position',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'DirectoryIterator::seek',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'DirectoryIterator::__toString',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'DirectoryIterator::valid',
    ),
  ),
  'EmptyIterator' => 
  array (
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EmptyIterator::current',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EmptyIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EmptyIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EmptyIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EmptyIterator::valid',
    ),
  ),
  'FilesystemIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'FilesystemIterator::__construct',
      'type' => 'string',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'FilesystemIterator::current',
    ),
    'getFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'FilesystemIterator::getFlags',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'FilesystemIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'FilesystemIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'FilesystemIterator::rewind',
    ),
    'setFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'FilesystemIterator::setFlags',
    ),
  ),
  'GlobIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'GlobIterator::__construct',
      'type' => 'string',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'GlobIterator::count',
    ),
  ),
  'InfiniteIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'InfiniteIterator::__construct',
      'type' => 'Iterator',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'InfiniteIterator::next',
    ),
  ),
  'LimitIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'initializer' => '= 0',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$count',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'LimitIterator::__construct',
      'type' => 'Iterator',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'LimitIterator::current',
    ),
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Iterator',
      'name' => 'LimitIterator::getInnerIterator',
    ),
    'getPosition' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'LimitIterator::getPosition',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'LimitIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'LimitIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'LimitIterator::rewind',
    ),
    'seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$position',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'LimitIterator::seek',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'LimitIterator::valid',
    ),
  ),
  'MultipleIterator' => 
  array (
    'attachIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$infos',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::attachIterator',
    ),
    'containsIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::containsIterator',
    ),
    'countIterators' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::countIterators',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MultipleIterator::current',
    ),
    'detachIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::detachIterator',
    ),
    'getFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::getFlags',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'MultipleIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::rewind',
    ),
    'setFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::setFlags',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'MultipleIterator::valid',
    ),
  ),
  'NoRewindIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'NoRewindIterator::__construct',
      'type' => 'Iterator',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'NoRewindIterator::current',
    ),
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'iterator',
      'name' => 'NoRewindIterator::getInnerIterator',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'NoRewindIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'NoRewindIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'NoRewindIterator::rewind',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'NoRewindIterator::valid',
    ),
  ),
  'ParentIterator' => 
  array (
    'accept' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'ParentIterator::accept',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'RecursiveIterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'ParentIterator::__construct',
      'type' => 'RecursiveIterator',
    ),
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ParentIterator',
      'name' => 'ParentIterator::getChildren',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'ParentIterator::hasChildren',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ParentIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ParentIterator::rewind',
    ),
  ),
  'RecursiveArrayIterator' => 
  array (
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveArrayIterator',
      'name' => 'RecursiveArrayIterator::getChildren',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveArrayIterator::hasChildren',
    ),
  ),
  'RecursiveCachingIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Iterator',
          'name' => '$iterator',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$flags',
          'initializer' => '= self::CALL_TOSTRING',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'RecursiveCachingIterator::__construct',
      'type' => 'Iterator',
    ),
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveCachingIterator',
      'name' => 'RecursiveCachingIterator::getChildren',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveCachingIterator::hasChildren',
    ),
  ),
  'RecursiveCallbackFilterIterator' => 
  array (
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveCallbackFilterIterator',
      'name' => 'RecursiveCallbackFilterIterator::getChildren',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveCallbackFilterIterator::hasChildren',
    ),
  ),
  'RecursiveDirectoryIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'RecursiveDirectoryIterator::__construct',
      'type' => 'string',
    ),
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'RecursiveDirectoryIterator::getChildren',
    ),
    'getSubPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RecursiveDirectoryIterator::getSubPath',
    ),
    'getSubPathname' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RecursiveDirectoryIterator::getSubPathname',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$allow_links',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveDirectoryIterator::hasChildren',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RecursiveDirectoryIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveDirectoryIterator::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveDirectoryIterator::rewind',
    ),
  ),
  'RecursiveFilterIterator' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'RecursiveIterator',
          'name' => '$iterator',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'RecursiveFilterIterator::__construct',
      'type' => 'RecursiveIterator',
    ),
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveFilterIterator',
      'name' => 'RecursiveFilterIterator::getChildren',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveFilterIterator::hasChildren',
    ),
  ),
  'OuterIterator' => 
  array (
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Iterator',
      'name' => 'OuterIterator::getInnerIterator',
    ),
  ),
  'RecursiveIteratorIterator' => 
  array (
    'beginChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::beginChildren',
    ),
    'beginIteration' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::beginIteration',
    ),
    'callGetChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveIterator',
      'name' => 'RecursiveIteratorIterator::callGetChildren',
    ),
    'callHasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveIteratorIterator::callHasChildren',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Traversable',
          'name' => '$iterator',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'initializer' => '= RecursiveIteratorIterator::LEAVES_ONLY',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= 0',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'RecursiveIteratorIterator::__construct',
      'type' => 'Traversable',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'RecursiveIteratorIterator::current',
    ),
    'endChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::endChildren',
    ),
    'endIteration' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::endIteration',
    ),
    'getDepth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RecursiveIteratorIterator::getDepth',
    ),
    'getInnerIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'iterator',
      'name' => 'RecursiveIteratorIterator::getInnerIterator',
    ),
    'getMaxDepth' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'RecursiveIteratorIterator::getMaxDepth',
    ),
    'getSubIterator' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$level',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'RecursiveIterator',
      'name' => 'RecursiveIteratorIterator::getSubIterator',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'RecursiveIteratorIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::next',
    ),
    'nextElement' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::nextElement',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::rewind',
    ),
    'setMaxDepth' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$max_depth',
          'initializer' => '= -1',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveIteratorIterator::setMaxDepth',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveIteratorIterator::valid',
    ),
  ),
  'RecursiveIterator' => 
  array (
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveIterator',
      'name' => 'RecursiveIterator::getChildren',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveIterator::hasChildren',
    ),
  ),
  'RegexIterator' => 
  array (
    'accept' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RegexIterator::accept',
    ),
    'getFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RegexIterator::getFlags',
    ),
    'getMode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RegexIterator::getMode',
    ),
    'getPregFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'RegexIterator::getPregFlags',
    ),
    'getRegex' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RegexIterator::getRegex',
    ),
    'setFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RegexIterator::setFlags',
    ),
    'setMode' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RegexIterator::setMode',
    ),
    'setPregFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$preg_flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RegexIterator::setPregFlags',
    ),
  ),
  'RecursiveRegexIterator' => 
  array (
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveRegexIterator',
      'name' => 'RecursiveRegexIterator::getChildren',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveRegexIterator::hasChildren',
    ),
  ),
  'RecursiveTreeIterator' => 
  array (
    'beginChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::beginChildren',
    ),
    'beginIteration' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveIterator',
      'name' => 'RecursiveTreeIterator::beginIteration',
    ),
    'callGetChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'RecursiveIterator',
      'name' => 'RecursiveTreeIterator::callGetChildren',
    ),
    'callHasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveTreeIterator::callHasChildren',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'RecursiveIterator|IteratorAggregate',
          'name' => '$it',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= RecursiveTreeIterator::BYPASS_KEY',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$cit_flags',
          'initializer' => '= CachingIterator::CATCH_GET_CHILD',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'initializer' => '= RecursiveIteratorIterator::SELF_FIRST',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'RecursiveTreeIterator::__construct',
      'type' => 'RecursiveIterator|IteratorAggregate',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RecursiveTreeIterator::current',
    ),
    'endChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::endChildren',
    ),
    'endIteration' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::endIteration',
    ),
    'getEntry' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RecursiveTreeIterator::getEntry',
    ),
    'getPostfix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::getPostfix',
    ),
    'getPrefix' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RecursiveTreeIterator::getPrefix',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'RecursiveTreeIterator::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::next',
    ),
    'nextElement' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::nextElement',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::rewind',
    ),
    'setPrefixPart' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$part',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'RecursiveTreeIterator::setPrefixPart',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'RecursiveTreeIterator::valid',
    ),
  ),
  'Countable' => 
  array (
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'int',
      'name' => 'Countable::count',
    ),
  ),
  'SeekableIterator' => 
  array (
    'seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$position',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'SeekableIterator::seek',
    ),
  ),
  'SplFileInfo' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$file_name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SplFileInfo::__construct',
      'type' => 'string',
    ),
    'getATime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getATime',
    ),
    'getBasename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$suffix',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getBasename',
    ),
    'getCTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getCTime',
    ),
    'getExtension' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getExtension',
    ),
    'getFileInfo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SplFileInfo',
      'name' => 'SplFileInfo::getFileInfo',
    ),
    'getFilename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getFilename',
    ),
    'getGroup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getGroup',
    ),
    'getInode' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getInode',
    ),
    'getLinkTarget' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getLinkTarget',
    ),
    'getMTime' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getMTime',
    ),
    'getOwner' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getOwner',
    ),
    'getPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getPath',
    ),
    'getPathInfo' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SplFileInfo',
      'name' => 'SplFileInfo::getPathInfo',
    ),
    'getPathname' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getPathname',
    ),
    'getPerms' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getPerms',
    ),
    'getRealPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getRealPath',
    ),
    'getSize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileInfo::getSize',
    ),
    'getType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileInfo::getType',
    ),
    'isDir' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileInfo::isDir',
    ),
    'isExecutable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileInfo::isExecutable',
    ),
    'isFile' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileInfo::isFile',
    ),
    'isLink' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileInfo::isLink',
    ),
    'isReadable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileInfo::isReadable',
    ),
    'isWritable' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileInfo::isWritable',
    ),
    'openFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$open_mode',
          'initializer' => '= "r"',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$use_include_path',
          'initializer' => '= false',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'resource',
          'name' => '$context',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'SplFileObject',
      'name' => 'SplFileInfo::openFile',
    ),
    'setFileClass' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileInfo::setFileClass',
    ),
    'setInfoClass' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$class_name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileInfo::setInfoClass',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileInfo::__toString',
    ),
  ),
  'SplFileObject' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$open_mode',
          'initializer' => '= "r"',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'bool',
          'name' => '$use_include_path',
          'initializer' => '= false',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'resource',
          'name' => '$context',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SplFileObject::__construct',
      'type' => 'string',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string|array',
      'name' => 'SplFileObject::current',
    ),
    'eof' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileObject::eof',
    ),
    'fflush' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileObject::fflush',
    ),
    'fgetc' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileObject::fgetc',
    ),
    'fgetcsv' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$delimiter',
          'initializer' => '= ","',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$enclosure',
          'initializer' => '= "\\""',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$escape',
          'initializer' => '= "\\\\"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SplFileObject::fgetcsv',
    ),
    'fgets' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileObject::fgets',
    ),
    'fgetss' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$allowable_tags',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileObject::fgetss',
    ),
    'flock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$operation',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '&$wouldblock',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileObject::flock',
    ),
    'fpassthru' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::fpassthru',
    ),
    'fputcsv' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$fields',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$delimiter',
          'initializer' => '= ","',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$enclosure',
          'initializer' => '= \'"\'',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::fputcsv',
    ),
    'fread' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'SplFileObject::fread',
    ),
    'fscanf' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$format',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$...',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'SplFileObject::fscanf',
    ),
    'fseek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$whence',
          'initializer' => '= SEEK_SET',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::fseek',
    ),
    'fstat' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SplFileObject::fstat',
    ),
    'ftell' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::ftell',
    ),
    'ftruncate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$size',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileObject::ftruncate',
    ),
    'fwrite' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$str',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$length',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::fwrite',
    ),
    'getChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::getChildren',
    ),
    'getCsvControl' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SplFileObject::getCsvControl',
    ),
    'getFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::getFlags',
    ),
    'getMaxLineLen' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::getMaxLineLen',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileObject::hasChildren',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'SplFileObject::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::next',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::rewind',
    ),
    'seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$line_pos',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::seek',
    ),
    'setCsvControl' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$delimiter',
          'initializer' => '= ","',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$enclosure',
          'initializer' => '= "\\""',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$escape',
          'initializer' => '= "\\\\"',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::setCsvControl',
    ),
    'setFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::setFlags',
    ),
    'setMaxLineLen' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$max_len',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::setMaxLineLen',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'SplFileObject::__toString',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'SplFileObject::valid',
    ),
  ),
  'SplTempFileObject' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$max_memory',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'SplTempFileObject::__construct',
      'type' => 'int',
    ),
  ),
  'ArrayObject' => 
  array (
    'append' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::append',
    ),
    'asort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::asort',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'ArrayObject::count',
    ),
    'exchangeArray' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$input',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'ArrayObject::exchangeArray',
    ),
    'getArrayCopy' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'ArrayObject::getArrayCopy',
    ),
    'getFlags' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'ArrayObject::getFlags',
    ),
    'getIterator' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'ArrayIterator',
      'name' => 'ArrayObject::getIterator',
    ),
    'getIteratorClass' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'ArrayObject::getIteratorClass',
    ),
    'ksort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::ksort',
    ),
    'natcasesort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::natcasesort',
    ),
    'natsort' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::natsort',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'ArrayObject::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'ArrayObject::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$newval',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$index',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::offsetUnset',
    ),
    'serialize' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'ArrayObject::serialize',
    ),
    'setFlags' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::setFlags',
    ),
    'setIteratorClass' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$iterator_class',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::setIteratorClass',
    ),
    'uasort' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$cmp_function',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::uasort',
    ),
    'uksort' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$cmp_function',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::uksort',
    ),
    'unserialize' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$serialized',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'ArrayObject::unserialize',
    ),
  ),
  'SplObserver' => 
  array (
    'update' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SplSubject',
          'name' => '$subject',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'SplObserver::update',
    ),
  ),
  'SplSubject' => 
  array (
    'attach' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SplObserver',
          'name' => '$observer',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'SplSubject::attach',
    ),
    'detach' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'SplObserver',
          'name' => '$observer',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'SplSubject::detach',
    ),
    'notify' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'SplSubject::notify',
    ),
  ),
  'SplType' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$initial_value',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$strict',
          'required' => false,
        ),
      ),
      'name' => 'SplType::__construct',
      'type' => 'mixed',
    ),
  ),
  'SplEnum' => 
  array (
    'getConstList' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$include_default',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'SplEnum::getConstList',
    ),
  ),
  'php_user_filter' => 
  array (
    'filter' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'resource',
          'name' => '$in',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'resource',
          'name' => '$out',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '&$consumed',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$closing',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'php_user_filter::filter',
    ),
    'onClose' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'php_user_filter::onClose',
    ),
    'onCreate' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'php_user_filter::onCreate',
    ),
  ),
  'streamWrapper' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'streamWrapper::__construct',
    ),
    '__destruct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'streamWrapper::__destruct',
    ),
    'dir_closedir' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::dir_closedir',
    ),
    'dir_opendir' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::dir_opendir',
    ),
    'dir_readdir' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'streamWrapper::dir_readdir',
    ),
    'dir_rewinddir' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::dir_rewinddir',
    ),
    'mkdir' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$mode',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::mkdir',
    ),
    'rename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path_from',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$path_to',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::rename',
    ),
    'rmdir' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::rmdir',
    ),
    'stream_cast' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$cast_as',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'resource',
      'name' => 'streamWrapper::stream_cast',
    ),
    'stream_close' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'streamWrapper::stream_close',
    ),
    'stream_eof' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_eof',
    ),
    'stream_flush' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_flush',
    ),
    'stream_lock' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$operation',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_lock',
    ),
    'stream_metadata' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$option',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_metadata',
    ),
    'stream_open' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$mode',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$options',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'string',
          'name' => '&$opened_path',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_open',
    ),
    'stream_read' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$count',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'streamWrapper::stream_read',
    ),
    'stream_seek' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$offset',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$whence',
          'initializer' => '= SEEK_SET',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_seek',
    ),
    'stream_set_option' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$option',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$arg1',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$arg2',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_set_option',
    ),
    'stream_stat' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'streamWrapper::stream_stat',
    ),
    'stream_tell' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'streamWrapper::stream_tell',
    ),
    'stream_truncate' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$new_size',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::stream_truncate',
    ),
    'stream_write' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'streamWrapper::stream_write',
    ),
    'unlink' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'streamWrapper::unlink',
    ),
    'url_stat' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$path',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'streamWrapper::url_stat',
    ),
  ),
  'tidy' => 
  array (
    'body' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'tidyNode',
      'name' => 'tidy::body',
    ),
    'cleanRepair' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidy::cleanRepair',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$config',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$use_include_path',
          'required' => false,
        ),
      ),
      'name' => 'tidy::__construct',
      'type' => 'string',
    ),
    'diagnose' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidy::diagnose',
    ),
    'getConfig' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'array',
      'name' => 'tidy::getConfig',
    ),
    'getHtmlVer' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'tidy::getHtmlVer',
    ),
    'getOpt' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$option',
          'required' => true,
        ),
      ),
      'type' => 'mixed',
      'name' => 'tidy::getOpt',
    ),
    'getOptDoc' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$optname',
          'required' => true,
        ),
      ),
      'type' => 'string',
      'name' => 'tidy::getOptDoc',
    ),
    'getRelease' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'string',
      'name' => 'tidy::getRelease',
    ),
    'getStatus' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'int',
      'name' => 'tidy::getStatus',
    ),
    'head' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'tidyNode',
      'name' => 'tidy::head',
    ),
    'html' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'tidyNode',
      'name' => 'tidy::html',
    ),
    'isXhtml' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidy::isXhtml',
    ),
    'isXml' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidy::isXml',
    ),
    'parseFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$config',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$use_include_path',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'tidy::parseFile',
    ),
    'parseString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$input',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$config',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => false,
        ),
      ),
      'type' => 'bool',
      'name' => 'tidy::parseString',
    ),
    'repairFile' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$config',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$use_include_path',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'tidy::repairFile',
    ),
    'repairString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$data',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$config',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$encoding',
          'required' => false,
        ),
      ),
      'type' => 'string',
      'name' => 'tidy::repairString',
    ),
    'root' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'tidyNode',
      'name' => 'tidy::root',
    ),
  ),
  'tidyNode' => 
  array (
    'getParent' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'tidyNode',
      'name' => 'tidyNode::getParent',
    ),
    'hasChildren' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::hasChildren',
    ),
    'hasSiblings' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::hasSiblings',
    ),
    'isAsp' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::isAsp',
    ),
    'isComment' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::isComment',
    ),
    'isHtml' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::isHtml',
    ),
    'isJste' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::isJste',
    ),
    'isPhp' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::isPhp',
    ),
    'isText' => 
    array (
      'args' => 
      array (
      ),
      'type' => 'bool',
      'name' => 'tidyNode::isText',
    ),
  ),
  'V8Js' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$object_name',
          'initializer' => '= "PHP"',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$variables',
          'initializer' => '= array()',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$extensions',
          'initializer' => '= array()',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$report_uncaught_exceptions',
          'initializer' => '= TRUE',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'V8Js::__construct',
      'type' => 'string',
    ),
    'executeString' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$script',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$identifier',
          'initializer' => '= "V8Js::executeString()"',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'initializer' => '= V8Js::FLAG_NONE',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'V8Js::executeString',
    ),
    'getExtensions' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'V8Js::getExtensions',
    ),
    'getPendingException' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'V8JsException',
      'name' => 'V8Js::getPendingException',
    ),
    'registerExtension' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$extension_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$script',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$dependencies',
          'initializer' => '= array()',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'bool',
          'name' => '$auto_enable',
          'initializer' => '= FALSE',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'V8Js::registerExtension',
    ),
  ),
  'V8JsException' => 
  array (
    'getJsFileName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'V8JsException::getJsFileName',
    ),
    'getJsLineNumber' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'int',
      'name' => 'V8JsException::getJsLineNumber',
    ),
    'getJsSourceLine' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'V8JsException::getJsSourceLine',
    ),
    'getJsTrace' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'string',
      'name' => 'V8JsException::getJsTrace',
    ),
  ),
  'Yaf_Application' => 
  array (
    'app' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Application::app',
    ),
    'bootstrap' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Bootstrap_Abstract',
          'name' => '$bootstrap',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Application::bootstrap',
    ),
    'clearLastError' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Application',
      'name' => 'Yaf_Application::clearLastError',
    ),
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Application::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$config',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$envrion',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Application::__construct',
      'type' => 'mixed',
    ),
    '__destruct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Application::__destruct',
    ),
    'environ' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Application::environ',
    ),
    'execute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'callable',
          'name' => '$entry',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$...',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Application::execute',
    ),
    'getAppDirectory' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Application',
      'name' => 'Yaf_Application::getAppDirectory',
    ),
    'getConfig' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Config_Abstract',
      'name' => 'Yaf_Application::getConfig',
    ),
    'getDispatcher' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Application::getDispatcher',
    ),
    'getLastErrorMsg' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Application::getLastErrorMsg',
    ),
    'getLastErrorNo' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'int',
      'name' => 'Yaf_Application::getLastErrorNo',
    ),
    'getModules' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Yaf_Application::getModules',
    ),
    'run' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Application::run',
    ),
    'setAppDirectory' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$directory',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Application',
      'name' => 'Yaf_Application::setAppDirectory',
    ),
    '__sleep' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Application::__sleep',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Application::__wakeup',
    ),
  ),
  'Yaf_Dispatcher' => 
  array (
    'autoRender' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$flag',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::autoRender',
    ),
    'catchException' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$flag',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::catchException',
    ),
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Dispatcher::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Dispatcher::__construct',
    ),
    'disableView' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Dispatcher::disableView',
    ),
    'dispatch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Response_Abstract',
      'name' => 'Yaf_Dispatcher::dispatch',
    ),
    'enableView' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::enableView',
    ),
    'flushInstantly' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$flag',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::flushInstantly',
    ),
    'getApplication' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Application',
      'name' => 'Yaf_Dispatcher::getApplication',
    ),
    'getInstance' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::getInstance',
    ),
    'getRequest' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Request_Abstract',
      'name' => 'Yaf_Dispatcher::getRequest',
    ),
    'getRouter' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Router',
      'name' => 'Yaf_Dispatcher::getRouter',
    ),
    'initView' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$templates_dir',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_View_Interface',
      'name' => 'Yaf_Dispatcher::initView',
    ),
    'registerPlugin' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Plugin_Abstract',
          'name' => '$plugin',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::registerPlugin',
    ),
    'returnResponse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$flag',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::returnResponse',
    ),
    'setDefaultAction' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$action',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::setDefaultAction',
    ),
    'setDefaultController' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$controller',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::setDefaultController',
    ),
    'setDefaultModule' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$module',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::setDefaultModule',
    ),
    'setErrorHandler' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'call',
          'name' => '$callback',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$error_types',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::setErrorHandler',
    ),
    'setRequest' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::setRequest',
    ),
    'setView' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_View_Interface',
          'name' => '$view',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::setView',
    ),
    '__sleep' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Dispatcher::__sleep',
    ),
    'throwException' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$flag',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Dispatcher',
      'name' => 'Yaf_Dispatcher::throwException',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Dispatcher::__wakeup',
    ),
  ),
  'Yaf_Config_Abstract' => 
  array (
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'mixed',
      'name' => 'Yaf_Config_Abstract::get',
    ),
    'readonly' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'bool',
      'name' => 'Yaf_Config_Abstract::readonly',
    ),
    'set' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'Yaf_Config_Abstract',
      'name' => 'Yaf_Config_Abstract::set',
    ),
    'toArray' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'array',
      'name' => 'Yaf_Config_Abstract::toArray',
    ),
  ),
  'Yaf_Config_Ini' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$config_file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$section',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Config_Ini::__construct',
      'type' => 'string',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::current',
    ),
    '__get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::__get',
    ),
    '__isset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::__isset',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::offsetUnset',
    ),
    'readonly' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::readonly',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::rewind',
    ),
    '__set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::__set',
    ),
    'toArray' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Yaf_Config_Ini::toArray',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Ini::valid',
    ),
  ),
  'Yaf_Config_Simple' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$config_file',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$section',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Config_Simple::__construct',
      'type' => 'string',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::current',
    ),
    '__get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::__get',
    ),
    '__isset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::__isset',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::offsetUnset',
    ),
    'readonly' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::readonly',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::rewind',
    ),
    '__set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::__set',
    ),
    'toArray' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Yaf_Config_Simple::toArray',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Config_Simple::valid',
    ),
  ),
  'Yaf_Controller_Abstract' => 
  array (
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'final',
      'name' => 'Yaf_Controller_Abstract::__construct',
    ),
    'display' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tpl',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$parameters',
          'required' => false,
        ),
      ),
      'modifier' => 'protected',
      'type' => 'bool',
      'name' => 'Yaf_Controller_Abstract::display',
    ),
    'forward' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$action',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$paramters',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::forward',
    ),
    'getInvokeArg' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::getInvokeArg',
    ),
    'getInvokeArgs' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::getInvokeArgs',
    ),
    'getModuleName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Controller_Abstract::getModuleName',
    ),
    'getRequest' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Request_Abstract',
      'name' => 'Yaf_Controller_Abstract::getRequest',
    ),
    'getResponse' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Response_Abstract',
      'name' => 'Yaf_Controller_Abstract::getResponse',
    ),
    'getView' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_View_Interface',
      'name' => 'Yaf_Controller_Abstract::getView',
    ),
    'getViewpath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::getViewpath',
    ),
    'init' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::init',
    ),
    'initView' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::initView',
    ),
    'redirect' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$url',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Controller_Abstract::redirect',
    ),
    'render' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tpl',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$parameters',
          'required' => false,
        ),
      ),
      'modifier' => 'protected',
      'type' => 'string',
      'name' => 'Yaf_Controller_Abstract::render',
    ),
    'setViewpath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$view_directory',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Controller_Abstract::setViewpath',
    ),
  ),
  'Yaf_Action_Abstract' => 
  array (
    'execute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$arg',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$...',
          'required' => false,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'mixed',
      'name' => 'Yaf_Action_Abstract::execute',
    ),
    'getController' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Controller_Abstract',
      'name' => 'Yaf_Action_Abstract::getController',
    ),
  ),
  'Yaf_View_Interface' => 
  array (
    'assign' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => false,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'bool',
      'name' => 'Yaf_View_Interface::assign',
    ),
    'display' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tpl',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tpl_vars',
          'required' => false,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'bool',
      'name' => 'Yaf_View_Interface::display',
    ),
    'getScriptPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'Yaf_View_Interface::getScriptPath',
    ),
    'render' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tpl',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tpl_vars',
          'required' => false,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'string',
      'name' => 'Yaf_View_Interface::render',
    ),
    'setScriptPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$template_dir',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'void',
      'name' => 'Yaf_View_Interface::setScriptPath',
    ),
  ),
  'Yaf_View_Simple' => 
  array (
    'assign' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_View_Simple::assign',
    ),
    'assignRef' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '&$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_View_Simple::assignRef',
    ),
    'clear' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_View_Simple::clear',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tempalte_dir',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$options',
          'required' => false,
        ),
      ),
      'modifier' => 'final',
      'name' => 'Yaf_View_Simple::__construct',
      'type' => 'string',
    ),
    'display' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tpl',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tpl_vars',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_View_Simple::display',
    ),
    'eval' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tpl_content',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tpl_vars',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_View_Simple::eval',
    ),
    '__get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_View_Simple::__get',
    ),
    'getScriptPath' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_View_Simple::getScriptPath',
    ),
    '__isset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_View_Simple::__isset',
    ),
    'render' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$tpl',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$tpl_vars',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_View_Simple::render',
    ),
    '__set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_View_Simple::__set',
    ),
    'setScriptPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$template_dir',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_View_Simple::setScriptPath',
    ),
  ),
  'Yaf_Loader' => 
  array (
    'autoload' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Loader::autoload',
    ),
    'clearLocalNamespace' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Loader::clearLocalNamespace',
    ),
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Loader::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Loader::__construct',
    ),
    'getInstance' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Loader::getInstance',
    ),
    'getLibraryPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'bool',
          'name' => '$is_global',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Loader',
      'name' => 'Yaf_Loader::getLibraryPath',
    ),
    'getLocalNamespace' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Loader::getLocalNamespace',
    ),
    'import' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Loader::import',
    ),
    'isLocalName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Loader::isLocalName',
    ),
    'registerLocalNamespace' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'mixed',
          'name' => '$prefix',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Loader::registerLocalNamespace',
    ),
    'setLibraryPath' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$directory',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'bool',
          'name' => '$is_global',
          'initializer' => '= false',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Loader',
      'name' => 'Yaf_Loader::setLibraryPath',
    ),
    '__sleep' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Loader::__sleep',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Loader::__wakeup',
    ),
  ),
  'Yaf_Plugin_Abstract' => 
  array (
    'dispatchLoopShutdown' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Response_Abstract',
          'name' => '$response',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Plugin_Abstract::dispatchLoopShutdown',
    ),
    'dispatchLoopStartup' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Response_Abstract',
          'name' => '$response',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Plugin_Abstract::dispatchLoopStartup',
    ),
    'postDispatch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Response_Abstract',
          'name' => '$response',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Plugin_Abstract::postDispatch',
    ),
    'preDispatch' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Response_Abstract',
          'name' => '$response',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Plugin_Abstract::preDispatch',
    ),
    'preResponse' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Response_Abstract',
          'name' => '$response',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Plugin_Abstract::preResponse',
    ),
    'routerShutdown' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Response_Abstract',
          'name' => '$response',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Plugin_Abstract::routerShutdown',
    ),
    'routerStartup' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Response_Abstract',
          'name' => '$response',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Plugin_Abstract::routerStartup',
    ),
  ),
  'Yaf_Registry' => 
  array (
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Registry::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'Yaf_Registry::__construct',
    ),
    'del' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Registry::del',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Yaf_Registry::get',
    ),
    'has' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Registry::has',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Registry::set',
    ),
  ),
  'Yaf_Request_Abstract' => 
  array (
    'getActionName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getActionName',
    ),
    'getBaseUri' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getBaseUri',
    ),
    'getControllerName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getControllerName',
    ),
    'getEnv' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getEnv',
    ),
    'getException' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getException',
    ),
    'getLanguage' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getLanguage',
    ),
    'getMethod' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getMethod',
    ),
    'getModuleName' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getModuleName',
    ),
    'getParam' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getParam',
    ),
    'getParams' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getParams',
    ),
    'getRequestUri' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getRequestUri',
    ),
    'getServer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::getServer',
    ),
    'isCli' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isCli',
    ),
    'isDispatched' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isDispatched',
    ),
    'isGet' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isGet',
    ),
    'isHead' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isHead',
    ),
    'isOptions' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isOptions',
    ),
    'isPost' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isPost',
    ),
    'isPut' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isPut',
    ),
    'isRouted' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isRouted',
    ),
    'isXmlHttpRequest' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::isXmlHttpRequest',
    ),
    'setActionName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$action',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::setActionName',
    ),
    'setBaseUri' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$uir',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Request_Abstract::setBaseUri',
    ),
    'setControllerName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$controller',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::setControllerName',
    ),
    'setDispatched' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::setDispatched',
    ),
    'setModuleName' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$module',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::setModuleName',
    ),
    'setParam' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::setParam',
    ),
    'setRequestUri' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$uir',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::setRequestUri',
    ),
    'setRouted' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$flag',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Abstract::setRouted',
    ),
  ),
  'Yaf_Request_Http' => 
  array (
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Request_Http::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'Yaf_Request_Http::__construct',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Yaf_Request_Http::get',
    ),
    'getCookie' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Yaf_Request_Http::getCookie',
    ),
    'getFiles' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Http::getFiles',
    ),
    'getPost' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Yaf_Request_Http::getPost',
    ),
    'getQuery' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$default',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Yaf_Request_Http::getQuery',
    ),
    'getRequest' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Http::getRequest',
    ),
    'isXmlHttpRequest' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Request_Http::isXmlHttpRequest',
    ),
  ),
  'Yaf_Request_Simple' => 
  array (
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'Yaf_Request_Simple::__construct',
    ),
    'get' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::get',
    ),
    'getCookie' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::getCookie',
    ),
    'getFiles' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::getFiles',
    ),
    'getPost' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::getPost',
    ),
    'getQuery' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::getQuery',
    ),
    'getRequest' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::getRequest',
    ),
    'isXmlHttpRequest' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Request_Simple::isXmlHttpRequest',
    ),
  ),
  'Yaf_Response_Abstract' => 
  array (
    'appendBody' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$content',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Response_Abstract::appendBody',
    ),
    'clearBody' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Response_Abstract::clearBody',
    ),
    'clearHeaders' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::clearHeaders',
    ),
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Response_Abstract::__construct',
    ),
    '__destruct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::__destruct',
    ),
    'getBody' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Yaf_Response_Abstract::getBody',
    ),
    'getHeader' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::getHeader',
    ),
    'prependBody' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$content',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Response_Abstract::prependBody',
    ),
    'response' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::response',
    ),
    'setAllHeaders' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'protected',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::setAllHeaders',
    ),
    'setBody' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$content',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Response_Abstract::setBody',
    ),
    'setHeader' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::setHeader',
    ),
    'setRedirect' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::setRedirect',
    ),
    '__toString' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Response_Abstract::__toString',
    ),
  ),
  'Yaf_Route_Interface' => 
  array (
    'assemble' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$info',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'string',
      'name' => 'Yaf_Route_Interface::assemble',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'abstract',
      'type' => 'bool',
      'name' => 'Yaf_Route_Interface::route',
    ),
  ),
  'Yaf_Route_Map' => 
  array (
    'assemble' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$info',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Route_Map::assemble',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$controller_prefer',
          'initializer' => '= false',
          'required' => false,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$delimiter',
          'initializer' => '= ""',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Route_Map::__construct',
      'type' => 'string',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Route_Map::route',
    ),
  ),
  'Yaf_Route_Regex' => 
  array (
    'assemble' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$info',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Route_Regex::assemble',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$match',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$route',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$map',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'array',
          'name' => '$verify',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'string',
          'name' => '$reverse',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Route_Regex::__construct',
      'type' => 'string',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Route_Regex::route',
    ),
  ),
  'Yaf_Route_Rewrite' => 
  array (
    'assemble' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$info',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Route_Rewrite::assemble',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$match',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$route',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'array',
          'name' => '$verify',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Route_Rewrite::__construct',
      'type' => 'string',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Route_Rewrite::route',
    ),
  ),
  'Yaf_Router' => 
  array (
    'addConfig' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Config_Abstract',
          'name' => '$config',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Router::addConfig',
    ),
    'addRoute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'Yaf_Route_Abstract',
          'name' => '$route',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Router::addRoute',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Router::__construct',
    ),
    'getCurrentRoute' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Router::getCurrentRoute',
    ),
    'getRoute' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Yaf_Route_Interface',
      'name' => 'Yaf_Router::getRoute',
    ),
    'getRoutes' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'mixed',
      'name' => 'Yaf_Router::getRoutes',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Router::route',
    ),
  ),
  'Yaf_Route_Simple' => 
  array (
    'assemble' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$info',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Route_Simple::assemble',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$module_name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$controller_name',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$action_name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Route_Simple::__construct',
      'type' => 'string',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Route_Simple::route',
    ),
  ),
  'Yaf_Route_Static' => 
  array (
    'assemble' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$info',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Route_Static::assemble',
    ),
    'match' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$uri',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Route_Static::match',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Route_Static::route',
    ),
  ),
  'Yaf_Route_Supervar' => 
  array (
    'assemble' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'array',
          'name' => '$info',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'array',
          'name' => '$query',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'Yaf_Route_Supervar::assemble',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$supervar_name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Route_Supervar::__construct',
      'type' => 'string',
    ),
    'route' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'Yaf_Request_Abstract',
          'name' => '$request',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Yaf_Route_Supervar::route',
    ),
  ),
  'Yaf_Session' => 
  array (
    '__clone' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Session::__clone',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'name' => 'Yaf_Session::__construct',
    ),
    'count' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::count',
    ),
    'current' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::current',
    ),
    'del' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::del',
    ),
    '__get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::__get',
    ),
    'getInstance' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::getInstance',
    ),
    'has' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::has',
    ),
    '__isset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::__isset',
    ),
    'key' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::key',
    ),
    'next' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::next',
    ),
    'offsetExists' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::offsetExists',
    ),
    'offsetGet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::offsetGet',
    ),
    'offsetSet' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::offsetSet',
    ),
    'offsetUnset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::offsetUnset',
    ),
    'rewind' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::rewind',
    ),
    '__set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$value',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::__set',
    ),
    '__sleep' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Session::__sleep',
    ),
    'start' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::start',
    ),
    '__unset' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$name',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::__unset',
    ),
    'valid' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Session::valid',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'private',
      'type' => 'void',
      'name' => 'Yaf_Session::__wakeup',
    ),
  ),
  'Yaf_Exception' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'name' => 'Yaf_Exception::__construct',
    ),
    'getPrevious' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Yaf_Exception::getPrevious',
    ),
  ),
  'chdb' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$pathname',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'name' => 'chdb::__construct',
      'type' => 'string',
    ),
    'get' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$key',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'chdb::get',
    ),
  ),
  'CURLFile' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$filename',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'string',
          'name' => '$mimetype',
          'required' => false,
        ),
        2 => 
        array (
          'type' => 'string',
          'name' => '$postname',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'CURLFile::__construct',
      'type' => 'string',
    ),
    'getFilename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'CURLFile::getFilename',
    ),
    'getMimeType' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'CURLFile::getMimeType',
    ),
    'getPostFilename' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'string',
      'name' => 'CURLFile::getPostFilename',
    ),
    'setMimeType' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$mime',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CURLFile::setMimeType',
    ),
    'setPostFilename' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'string',
          'name' => '$postname',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CURLFile::setPostFilename',
    ),
    '__wakeup' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'CURLFile::__wakeup',
    ),
  ),
  'Event' => 
  array (
    'add' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$timeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::add',
    ),
    'addSignal' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$timeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::addSignal',
    ),
    'addTimer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$timeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::addTimer',
    ),
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'EventBase',
          'name' => '$base',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$fd',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$what',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'callable',
          'name' => '$cb',
          'required' => true,
        ),
        4 => 
        array (
          'type' => 'mixed',
          'name' => '$arg',
          'initializer' => '= NULL',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'Event::__construct',
      'type' => 'EventBase',
    ),
    'del' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::del',
    ),
    'delSignal' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::delSignal',
    ),
    'delTimer' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::delTimer',
    ),
    'free' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'Event::free',
    ),
    'getSupportedMethods' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'array',
      'name' => 'Event::getSupportedMethods',
    ),
    'pending' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$flags',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::pending',
    ),
    'set' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'EventBase',
          'name' => '$base',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'mixed',
          'name' => '$fd',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'int',
          'name' => '$what',
          'required' => false,
        ),
        3 => 
        array (
          'type' => 'callable',
          'name' => '$cb',
          'required' => false,
        ),
        4 => 
        array (
          'type' => 'mixed',
          'name' => '$arg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::set',
    ),
    'setPriority' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'int',
          'name' => '$priority',
          'required' => true,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::setPriority',
    ),
    'setTimer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'EventBase',
          'name' => '$base',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$cb',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$arg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
      'name' => 'Event::setTimer',
    ),
    'signal' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'EventBase',
          'name' => '$base',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'int',
          'name' => '$signum',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'callable',
          'name' => '$cb',
          'required' => true,
        ),
        3 => 
        array (
          'type' => 'mixed',
          'name' => '$arg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Event',
      'name' => 'Event::signal',
    ),
    'timer' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'EventBase',
          'name' => '$base',
          'required' => true,
        ),
        1 => 
        array (
          'type' => 'callable',
          'name' => '$cb',
          'required' => true,
        ),
        2 => 
        array (
          'type' => 'mixed',
          'name' => '$arg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'Event',
      'name' => 'Event::timer',
    ),
  ),
  'EventBase' => 
  array (
    '__construct' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'EventConfig',
          'name' => '$cfg',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'name' => 'EventBase::__construct',
      'type' => 'EventConfig',
    ),
    'dispatch' => 
    array (
      'args' => 
      array (
      ),
      'modifier' => 'public',
      'type' => 'void',
      'name' => 'EventBase::dispatch',
    ),
    'exit' => 
    array (
      'args' => 
      array (
        0 => 
        array (
          'type' => 'double',
          'name' => '$timeout',
          'required' => false,
        ),
      ),
      'modifier' => 'public',
      'type' => 'bool',
  ),