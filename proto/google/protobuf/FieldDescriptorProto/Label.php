<?php
namespace google\protobuf\FieldDescriptorProto;

// @@protoc_insertion_point(namespace:.google.protobuf.FieldDescriptorProto.Label)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: google/protobuf/descriptor.proto
 *
 */
class Label extends \ProtocolBuffers\Enum
{
  // @@protoc_insertion_point(traits:.google.protobuf.FieldDescriptorProto.Label)
  
  /**
   * 0 is reserved for errors
   */
  const LABEL_OPTIONAL = 1;
  const LABEL_REQUIRED = 2;
  const LABEL_REPEATED = 3;
  
  // @@protoc_insertion_point(const_scope:.google.protobuf.FieldDescriptorProto.Label)
  
  // @@protoc_insertion_point(class_scope:.google.protobuf.FieldDescriptorProto.Label)
  
  public static function getEnumDescriptor()
  {
    static $descriptor;
    if (!$descriptor) {
      $builder = new \ProtocolBuffers\EnumDescriptorBuilder();
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => 1,
        "name"  => 'LABEL_OPTIONAL',
      )));
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => 2,
        "name"  => 'LABEL_REQUIRED',
      )));
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => 3,
        "name"  => 'LABEL_REPEATED',
      )));
      // @@protoc_insertion_point(builder_scope:.google.protobuf.FieldDescriptorProto.Label)
      $descriptor = $builder->build();
    }
    return $descriptor;
  }
}
