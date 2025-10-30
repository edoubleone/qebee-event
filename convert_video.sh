#!/bin/bash

# Script to convert .mov video to .mp4
# Usage: ./convert_video.sh input.mov output.mp4

if [ $# -ne 2 ]; then
    echo "Usage: $0 input.mov output.mp4"
    exit 1
fi

INPUT=$1
OUTPUT=$2

if [ ! -f "$INPUT" ]; then
    echo "Input file $INPUT does not exist"
    exit 1
fi

# Convert using FFmpeg
ffmpeg -i "$INPUT" -vcodec h264 -acodec aac -strict experimental "$OUTPUT"

if [ $? -eq 0 ]; then
    echo "Conversion successful: $OUTPUT"
else
    echo "Conversion failed"
fi