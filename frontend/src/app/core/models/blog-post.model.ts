export interface BlogPost {
  id: number;
  title: string;
  titleAr?: string;
  titleEn?: string;
  content: string;
  contentAr?: string;
  contentEn?: string;
  excerpt?: string;
  slug: string;
  authorId: number;
  authorName?: string;
  featuredImage?: string;
  tags?: string[];
  category?: string;
  isPublished: boolean;
  publishedAt?: string;
  viewCount?: number;
  createdAt: string;
  updatedAt: string;
}

export interface BlogPostSearchParams {
  category?: string;
  tag?: string;
  authorId?: number;
  isPublished?: boolean;
  search?: string;
}
